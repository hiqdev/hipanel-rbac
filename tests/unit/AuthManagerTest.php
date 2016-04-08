<?php

namespace hipanel\rbac\tests\unit;

use hipanel\rbac\AuthManager;
use hipanel\rbac\Initer;
use Yii;

/**
 * AuthManagerTest class.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AuthManager
     */
    protected $auth;

    protected function setUp()
    {
        $this->auth = Yii::createObject([
            'class'             => AuthManager::class,
            'itemFile'          => '@hipanel/rbac/tests/items.php',
            'ruleFile'          => '@hipanel/rbac/tests/rules.php',
            'assignmentFile'    => '@hipanel/rbac/tests/assignments.php',
        ]);
        Initer::reinit($this->auth);

        $this->auth->setAssignment('manager', 'test');
        $this->auth->setAssignment('freezer', 'test');
    }

    protected function tearDown()
    {
    }

    public function testMin()
    {
        $this->assertTrue($this->auth->checkAccess('test', 'domainSetNSs'));
        $this->assertTrue($this->auth->checkAccess('test', 'support'));
        $this->assertTrue($this->auth->checkAccess('test', 'manage'));
        $this->assertTrue($this->auth->checkAccess('test', 'freeze'));
        $this->assertTrue($this->auth->checkAccess('test', 'unfreeze'));
        $this->assertTrue($this->auth->checkAccess('test', 'supportRole'));

        $this->assertFalse($this->auth->checkAccess('test', 'admin'));
        $this->assertFalse($this->auth->checkAccess('test', 'administer'));
        $this->assertFalse($this->auth->checkAccess('test', 'deposit'));
    }
}
