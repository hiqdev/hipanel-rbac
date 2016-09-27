<?php

/*
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\console;

use hipanel\rbac\Initer;
use Yii;

/**
 * Class RbacController.
 *
 * Usage: `hidev rbac/init`
 */
class RbacController extends \yii\console\Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->get('authManager');
        Initer::init($auth);
    }

    public function actionReinit()
    {
        $auth = Yii::$app->get('authManager');
        Initer::reinit($auth);
    }

    public function actionShow()
    {
        $auth = Yii::$app->get('authManager');

        echo "Permissions:\n";
        foreach ($auth->getPermissions() as $name => $perm) {
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
}
