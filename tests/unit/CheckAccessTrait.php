<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
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
            'restore-password', 'deposit',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay', 'domain.push',
            'certificate.read', 'certificate.update', 'certificate.pay', 'certificate.push',
            'server.read', 'server.pay',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'tariff.read',
        ]);
    }

    public function testSupport()
    {
        $this->assertAccesses('role:support', [
            'access-subclients', 'support',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read',
            'domain.read', 'domain.update',
            'certificate.read', 'certificate.update',
            'server.read',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'tariff.read',
        ]);
    }

    public function testAdmin()
    {
        $this->assertAccesses('role:admin', [
            'access-subclients', 'support', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read',
            'domain.read', 'domain.update',
            'certificate.read', 'certificate.update',
            'server.read', 'server.create', 'server.update', 'server.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'tariff.read',
        ]);
    }

    public function testManager()
    {
        $this->assertAccesses('role:manager', [
            'access-subclients', 'support', 'manage',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete',
            'bill.read',
            'tariff.read', 'tariff.create', 'tariff.update', 'tariff.delete',
            'domain.read', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push',
            'certificate.read', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'server.read', 'server.pay', 'server.sell',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'document.read', 'document.create', 'document.update', 'document.delete', 'document.generate',
            'contact.force-verify',
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
            'bill.read', 'employee.read',
        ]);
    }

    public function testMighty()
    {
        $this->auth->setAssignments('role:admin,role:manager,role:document.master,role:bill.manager,domain.freeze,domain.force-push,domain.delete,employee.read', 'user:mighty');

        $this->assertAccesses('user:mighty', [
            'access-subclients', 'support', 'manage', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'tariff.read', 'tariff.create', 'tariff.update', 'tariff.delete',
            'domain.freeze',
            'domain.read', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push', 'domain.force-push',
            'certificate.read', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'server.read', 'server.create', 'server.update', 'server.delete', 'server.pay', 'server.sell',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.generate-all',
            'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete',
            'model.read', 'model.create', 'model.update', 'model.delete',
            'employee.read',
        ]);
    }

    public function testDeny()
    {
        $this->auth->setAssignments('role:client,deny:deposit,deny:domain.push,deny:server.pay,deny:server.read', 'user:limited');

        $this->assertAccesses('user:limited', [
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay',
            'certificate.read', 'certificate.update', 'certificate.pay', 'certificate.push',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'restore-password', 'bill.read', 'tariff.read',
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
