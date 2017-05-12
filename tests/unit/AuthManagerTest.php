<?php
/**
 * RBAC implementation for HiPanel.
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\tests\unit;

use hipanel\rbac\AuthManager;
use Yii;

/**
 * AuthManagerTest class.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManagerTest extends \PHPUnit_Framework_TestCase
{
    use CheckAccessTrait;

    /**
     * @var AuthManager
     */
    protected $auth;

    protected function setUp()
    {
        $this->auth = Yii::createObject(AuthManager::class);

        $this->setAssignments();
    }
}
