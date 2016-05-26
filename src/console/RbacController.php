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

        Initer::init($auth);

        $auth->save();
    }
}
