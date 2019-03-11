<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\tests\unit;

use hipanel\rbac\AuthManager;
use hipanel\rbac\Initer;

/**
 * AuthManagerTest class.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class IniterTest extends \PHPUnit\Framework\TestCase
{
    use CheckAccessTrait;

    /**
     * @var AuthManager
     */
    protected $auth;

    protected function setUp()
    {
        $this->auth = $this->createObject(AuthManager::class);

        $this->setAssignments();
    }

    public function testReinit()
    {
        $this->assertNull((new Initer())->reinit($this->auth));
    }

    protected function createObject($config)
    {
        return class_exists('Yii') ? \Yii::createObject($config) : \yii\helpers\Yii::createObject($config);
    }
}
