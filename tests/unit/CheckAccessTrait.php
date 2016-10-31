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
        $this->auth->setAssignment('admin', 'sol');

        foreach ($this->auth->getRoles() as $role) {
            $this->auth->setAssignment($role->name, $role->name);
        }
    }

    public function testClient()
    {
        $this->assertTrue($this->auth->checkAccess('client', 'deposit'));
        $this->assertTrue($this->auth->checkAccess('client', 'restore-password'));

        $this->assertFalse($this->auth->checkAccess('client', 'do-support'));
        $this->assertFalse($this->auth->checkAccess('client', 'manage'));
        $this->assertFalse($this->auth->checkAccess('client', 'freeze'));
        $this->assertFalse($this->auth->checkAccess('client', 'unfreeze'));
        $this->assertFalse($this->auth->checkAccess('client', 'administrate'));
        $this->assertFalse($this->auth->checkAccess('client', 'resell'));
        $this->assertFalse($this->auth->checkAccess('client', 'owner'));
        $this->assertFalse($this->auth->checkAccess('client', 'own'));
    }

    public function testSupport()
    {
        $this->assertTrue($this->auth->checkAccess('support', 'do-support'));

        $this->assertFalse($this->auth->checkAccess('support', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('support', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('support', 'manage'));
        $this->assertFalse($this->auth->checkAccess('support', 'freeze'));
        $this->assertFalse($this->auth->checkAccess('support', 'unfreeze'));
        $this->assertFalse($this->auth->checkAccess('support', 'administrate'));
        $this->assertFalse($this->auth->checkAccess('support', 'resell'));
        $this->assertFalse($this->auth->checkAccess('support', 'owner'));
        $this->assertFalse($this->auth->checkAccess('support', 'own'));
    }

    public function testManager()
    {
        $this->assertTrue($this->auth->checkAccess('manager', 'do-support'));
        $this->assertTrue($this->auth->checkAccess('manager', 'manage'));

        $this->assertFalse($this->auth->checkAccess('manager', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('manager', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('manager', 'administrate'));
        $this->assertFalse($this->auth->checkAccess('manager', 'resell'));
        $this->assertFalse($this->auth->checkAccess('manager', 'owner'));
        $this->assertFalse($this->auth->checkAccess('manager', 'own'));
        $this->assertFalse($this->auth->checkAccess('manager', 'freeze'));
        $this->assertFalse($this->auth->checkAccess('manager', 'unfreeze'));
        $this->assertFalse($this->auth->checkAccess('manager', 'create-bills'));
        $this->assertFalse($this->auth->checkAccess('manager', 'update-bills'));
        $this->assertFalse($this->auth->checkAccess('manager', 'delete-bills'));
    }

    public function testSol()
    {
        $this->assertTrue($this->auth->checkAccess('sol', 'do-support'));
        $this->assertTrue($this->auth->checkAccess('sol', 'manage'));
        $this->assertTrue($this->auth->checkAccess('sol', 'freeze'));
        $this->assertTrue($this->auth->checkAccess('sol', 'unfreeze'));
        $this->assertTrue($this->auth->checkAccess('sol', 'administrate'));
        $this->assertTrue($this->auth->checkAccess('sol', 'create-bills'));
        $this->assertTrue($this->auth->checkAccess('sol', 'update-bills'));
        $this->assertTrue($this->auth->checkAccess('sol', 'delete-bills'));

        $this->assertFalse($this->auth->checkAccess('sol', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('sol', 'restore-password'));
        $this->assertFalse($this->auth->checkAccess('sol', 'resell'));
        $this->assertFalse($this->auth->checkAccess('sol', 'owner'));
        $this->assertFalse($this->auth->checkAccess('sol', 'own'));
    }
}
