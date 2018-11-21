<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\tests\unit;

trait CheckAccessTrait
{
    public function setAssignments()
    {
        foreach ($this->auth->getAllItems() as $item) {
            $this->auth->setAssignment($item->name, $item->name);
        }
    }

    public function testPermission()
    {
        foreach ($this->auth->getPermissions() as $user) {
            foreach ($this->auth->getPermissions() as $perm) {
                $this->assertSame($user->name === $perm->name, $this->auth->checkAccess($user->name, $perm->name));
            }
        }
    }

    public function assertAccesses($userId, array $allowedPermissions)
    {
        $allPermissions = array_keys($this->auth->getPermissions());
        foreach ($allPermissions as $key => $permission) {
            if (strncmp('deny:', $permission, 5) === 0) {
                unset($allPermissions[$key]);
            }
        }
        $deniedPermissions = array_diff($allPermissions, $allowedPermissions);

        $this->assertAccess($userId, true, $allowedPermissions);
        $this->assertAccess($userId, false, $deniedPermissions);
    }

    public function assertAccess($userId, $isAllowed, array $permissions)
    {
        foreach ($permissions as $permission) {
            $checked = $this->auth->checkAccess($userId, $permission);
            if ($checked !== $isAllowed) {
                var_dump(compact('userId', 'isAllowed', 'permission'));
            }
            $this->assertSame($isAllowed, $checked);
        }
    }

    public function testNobody()
    {
        $this->assertAccesses('role:nobody', [
            'nothing',
        ]);
    }

    public function testUnauthorized()
    {
        $this->assertAccesses('', [
            'restore-password', 'deposit',
        ]);
    }

    public function testClient()
    {
        $this->assertAccesses('role:client', [
            'restore-password', 'deposit', 'have-goods',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay', 'domain.push',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.pay', 'certificate.push',
            'document.read', 'document.create', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'server.read', 'server.pay',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read',
        ]);
    }

    public function testSupport()
    {
        $this->assertAccesses('role:support', [
            'access-subclients', 'support',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read',
            'domain.read', 'domain.update',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'server.read',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'plan.read',
        ]);
    }

    public function testAdmin()
    {
        $this->assertAccesses('role:admin', [
            'access-subclients', 'support', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read',
            'domain.read', 'domain.update',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'server.read', 'server.create', 'server.update', 'server.delete',
            'hub.read', 'hub.create', 'hub.update', 'hub.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'plan.read',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete',
            'model.read', 'model.create', 'model.update', 'model.delete',
        ]);
    }

    public function testManager()
    {
        $this->assertAccesses('role:manager', [
            'access-subclients', 'support', 'manage',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete',
            'bill.read',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            'domain.read', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'server.read', 'server.pay', 'server.sell',
            'hub.sell',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.acceptance', 'document.invoice',
            'mailing.prepare', 'mailing.send',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete',
            'model.read', 'model.create', 'model.update', 'model.delete',
        ]);
    }

    public function testReseller()
    {
        $this->assertAccesses('role:reseller', [
            'deposit', 'have-goods',
            'access-subclients', 'support', 'manage', 'resell',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            'domain.read', 'domain.update', 'domain.delete', 'domain.pay', 'domain.push',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'server.read', 'server.pay', 'server.sell',
            'hub.sell',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.acceptance', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete',
            'model.read', 'model.create', 'model.update', 'model.delete',
        ]);
    }

    public function testEmployee()
    {
        $this->assertAccesses('role:employee', [
            'restore-password', 'deposit',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'document.read', 'document.create', 'document.acceptance',
            'bill.read', 'employee.read',
        ]);
    }

    public function testMighty()
    {
        $this->auth->setAssignments('role:admin,role:manager,role:document.master,role:bill.manager,role:stock.master,domain.freeze,domain.force-push,domain.delete,employee.read,domain.force-send-foa', 'user:mighty');

        $this->assertAccesses('user:mighty', [
            'access-subclients', 'support', 'manage', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            'domain.freeze',
            'domain.read', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push', 'domain.force-push', 'domain.force-send-foa',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'server.read', 'server.create', 'server.update', 'server.delete', 'server.pay', 'server.sell',
            'hub.sell',
            'hub.read', 'hub.create', 'hub.update', 'hub.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.generate-all',
            'document.acceptance', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete', 'move.read-all',
            'model.read', 'model.create', 'model.update', 'model.delete',
            'employee.read',
        ]);
    }

    public function testLimited()
    {
        $this->auth->setAssignments('role:client,deny:deposit,deny:domain.push,deny:server.pay,deny:server.read', 'user:limited');

        $this->assertAccesses('user:limited', [
            'have-goods',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.pay', 'certificate.push',
            'document.read', 'document.create', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'restore-password', 'bill.read', 'plan.read',
        ]);
    }

    public function testBetaTester()
    {
        $this->auth->setAssignments('role:beta-tester', 'user:beta-tester');

        $this->assertAccesses('user:beta-tester', [
            'test.beta',
        ]);
    }

    public function testAlphaTester()
    {
        $this->auth->setAssignments('role:alpha-tester', 'user:alpha-tester');

        $this->assertAccesses('user:alpha-tester', [
            'test.alpha', 'test.beta',
        ]);
    }
}
