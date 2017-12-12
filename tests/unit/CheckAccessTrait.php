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
            'domain.read', 'domain.create', 'domain.update',
            'domain.pay', 'domain.push', 'server.pay',
            'bill.read',
        ]);
    }

    public function testSupport()
    {
        $this->assertAccesses('role:support', [
            'support',
        ]);
    }

    public function testManager()
    {
        $this->assertAccesses('role:manager', [
            'support', 'manage',
            'bill.read',
            'domain.read', 'domain.create', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push',
            'server.pay', 'server.sell',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.manage', 'document.generate',
            'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'stock.read', 'stock.create', 'stock.update', 'stock.delete',
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
            'support', 'manage', 'admin',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'domain.freeze',
            'domain.read', 'domain.create', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push', 'domain.force-push',
            'server.pay', 'server.sell',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.manage', 'document.generate', 'document.generate-all',
            'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'stock.read', 'stock.create', 'stock.update', 'stock.delete',
            'employee.read',
        ]);
    }

    public function testDeny()
    {
        $this->auth->setAssignments('role:client,deny:deposit,deny:domain.push,deny:server.pay', 'user:limited');

        $this->assertAccesses('user:limited', [
            'domain.read', 'domain.create', 'domain.update',
            'restore-password', 'domain.pay', 'bill.read',
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
