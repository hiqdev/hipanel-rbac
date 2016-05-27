<?php

/*
 * HiPanel core package
 *
 * @link      https://hipanel.com/
 * @package   hipanel-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\console;

use hipanel\rbac\Initer;
use Yii;
use yii\rbac\Item;

/**
 * Class RbacController.
 *
 * Usage: ./hidev rbac/init
 */
class RbacController extends \yii\console\Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->get('authManager');
        $auth->setAssignment('freezer', 'sol');

        Initer::init($auth);
    }

    public function actionShow()
    {
        $auth = Yii::$app->get('authManager');

        echo "Permissions:\n";
        foreach ($auth->getItems(Item::TYPE_PERMISSION) as $name => $perm) {
            echo "\t$perm->name $perm->description\n";
        }

        echo "Roles:\n";
        foreach ($auth->getItems(Item::TYPE_ROLE) as $name => $role) {
            $children = implode(',', array_keys($auth->getChildren($name)));
            echo "\t$role->name [$children] $role->description\n";
        }
    }
}
