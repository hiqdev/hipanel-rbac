<?php

/*
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
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

    public function testClient()
    {
        $this->assertTrue ($this->auth->checkAccess('role:client', 'restore-password'));
        $this->assertTrue ($this->auth->checkAccess('role:client', 'deposit'));
        $this->assertTrue ($this->auth->checkAccess('role:client', 'domain.pay'));
        $this->assertTrue ($this->auth->checkAccess('role:client', 'server.pay'));

        $this->assertFalse($this->auth->checkAccess('role:client', 'support'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'manage'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'domain.freeze'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'domain.unfreeze'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'admin'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'resell'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'own'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'document.manage'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'contact.force-verify'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'mailing.prepare'));
        $this->assertFalse($this->auth->checkAccess('role:client', 'mailing.send'));
    }

    public function testSupport()
    {
        $this->assertTrue ($this->auth->checkAccess('role:support', 'support'));

        $this->assertFalse($this->auth->checkAccess('role:support', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'domain.pay'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'server.pay'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'manage'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'domain.freeze'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'domain.unfreeze'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'admin'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'resell'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'own'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'document.manage'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'contact.force-verify'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'mailing.prepare'));
        $this->assertFalse($this->auth->checkAccess('role:support', 'mailing.send'));
    }

    public function testManager()
    {
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'support'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'manage'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'domain.pay'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'server.pay'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'document.manage'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'contact.force-verify'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'mailing.prepare'));
        $this->assertTrue ($this->auth->checkAccess('role:manager', 'mailing.send'));

        $this->assertFalse($this->auth->checkAccess('role:manager', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'admin'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'resell'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'own'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'domain.freeze'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'domain.unfreeze'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'bill.create'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'bill.update'));
        $this->assertFalse($this->auth->checkAccess('role:manager', 'bill.delete'));
    }

    public function testPermission()
    {
        foreach ($this->auth->getPermissions() as $user) {
            foreach ($this->auth->getPermissions() as $perm) {
                $this->assertSame($user->name == $perm->name, $this->auth->checkAccess($user->name, $perm->name));
            }
        }
    }

    public function testMighty()
    {
        $this->auth->setAssignments('role:admin,role:manager,bill.create,domain.freeze,domain.force-push', 'user:mighty');

        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'support'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'manage'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'domain.freeze'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'admin'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'bill.create'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'domain.pay'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'server.pay'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'document.manage'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'contact.force-verify'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'mailing.prepare'));
        $this->assertTrue ($this->auth->checkAccess('user:mighty', 'mailing.send'));

        $this->assertFalse($this->auth->checkAccess('user:mighty', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'resell'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'own'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'bill.update'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'bill.delete'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'domain.unfreeze'));
        $this->assertFalse($this->auth->checkAccess('user:mighty', 'domain.force-push'));

    }
}
