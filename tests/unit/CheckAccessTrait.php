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
        $this->assertTrue($this->auth->checkAccess('client', 'client'));
        $this->assertTrue($this->auth->checkAccess('client', 'deposit'));

        $this->assertFalse($this->auth->checkAccess('client', 'support'));
        $this->assertFalse($this->auth->checkAccess('client', 'supporting'));
        $this->assertFalse($this->auth->checkAccess('client', 'manager'));
        $this->assertFalse($this->auth->checkAccess('client', 'manage'));
        $this->assertFalse($this->auth->checkAccess('client', 'freezer'));
        $this->assertFalse($this->auth->checkAccess('client', 'freeze'));
        $this->assertFalse($this->auth->checkAccess('client', 'unfreeze'));
        $this->assertFalse($this->auth->checkAccess('client', 'admin'));
        $this->assertFalse($this->auth->checkAccess('client', 'administrate'));
        $this->assertFalse($this->auth->checkAccess('client', 'reseller'));
        $this->assertFalse($this->auth->checkAccess('client', 'resell'));
        $this->assertFalse($this->auth->checkAccess('client', 'owner'));
        $this->assertFalse($this->auth->checkAccess('client', 'own'));
    }

    public function testSupport()
    {
        $this->assertTrue($this->auth->checkAccess('support', 'support'));
        $this->assertTrue($this->auth->checkAccess('support', 'supporting'));

        $this->assertFalse($this->auth->checkAccess('support', 'client'));
        $this->assertFalse($this->auth->checkAccess('support', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('support', 'manager'));
        $this->assertFalse($this->auth->checkAccess('support', 'manage'));
        $this->assertFalse($this->auth->checkAccess('support', 'freezer'));
        $this->assertFalse($this->auth->checkAccess('support', 'freeze'));
        $this->assertFalse($this->auth->checkAccess('support', 'unfreeze'));
        $this->assertFalse($this->auth->checkAccess('support', 'admin'));
        $this->assertFalse($this->auth->checkAccess('support', 'administrate'));
        $this->assertFalse($this->auth->checkAccess('support', 'reseller'));
        $this->assertFalse($this->auth->checkAccess('support', 'resell'));
        $this->assertFalse($this->auth->checkAccess('support', 'owner'));
        $this->assertFalse($this->auth->checkAccess('support', 'own'));
    }

    public function testSol()
    {
        $this->assertTrue($this->auth->checkAccess('sol', 'support'));
        $this->assertTrue($this->auth->checkAccess('sol', 'supporting'));
        $this->assertTrue($this->auth->checkAccess('sol', 'manager'));
        $this->assertTrue($this->auth->checkAccess('sol', 'manage'));
        $this->assertTrue($this->auth->checkAccess('sol', 'freezer'));
        $this->assertTrue($this->auth->checkAccess('sol', 'freeze'));
        $this->assertTrue($this->auth->checkAccess('sol', 'unfreeze'));
        $this->assertTrue($this->auth->checkAccess('sol', 'admin'));
        $this->assertTrue($this->auth->checkAccess('sol', 'administrate'));

        $this->assertFalse($this->auth->checkAccess('sol', 'client'));
        $this->assertFalse($this->auth->checkAccess('sol', 'deposit'));
        $this->assertFalse($this->auth->checkAccess('sol', 'reseller'));
        $this->assertFalse($this->auth->checkAccess('sol', 'resell'));
        $this->assertFalse($this->auth->checkAccess('sol', 'owner'));
        $this->assertFalse($this->auth->checkAccess('sol', 'own'));
    }
}
