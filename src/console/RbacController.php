<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\console;

use hipanel\rbac\RbacIniterInterface;
use yii\base\Module;

/**
 * Class RbacController.
 *
 * Usage: `hidev rbac/init`
 */
class RbacController extends \yii\console\Controller
{
    /**
     * @var RbacIniterInterface
     */
    protected $initer;

    public function __construct($id, Module $module, RbacIniterInterface $initer, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->initer = $initer;
    }

    public $defaultAction = 'show';

    public function actionInit()
    {
        $auth = $this->getApp()->get('authManager');
        $this->initer->init($auth);
    }

    public function actionReinit()
    {
        $auth = $this->getApp()->get('authManager');
        $this->initer->reinit($auth);
    }

    public function actionShow()
    {
        $auth = $this->getApp()->get('authManager');

        echo "Permissions:\n";
        $permissions = $auth->getPermissions();
        ksort($permissions);
        foreach ($permissions as $name => $perm) {
            echo "   $perm->name $perm->description\n";
        }

        echo "Roles:\n";
        foreach ($auth->getRoles() as $name => $role) {
            $children = implode(',', array_keys($auth->getChildren($name)));
            printf("   %-12s %s\n", "$role->name:", $children);
        }

        echo "Assignments:\n";
        foreach ($auth->getAllAssignments() as $userId => $roles) {
            $roles = implode(',', array_keys($roles));
            printf("   %-12s %s\n", "$userId:", $roles);
        }
    }

    protected function getApp()
    {
        return class_exists('Yii') ? \Yii::$app : \yii\helpers\Yii::getApp();
    }
}
