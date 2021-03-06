<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

use hiqdev\yii\compat\yii;
use hiqdev\yii\compat\Buildtime;

$app = [
    'controllerMap' => [
        'rbac' => [
            '__class' => \hipanel\rbac\console\RbacController::class,
        ],
    ],
];

$components = [
    'user' => [
        '__class' => \yii\web\User::class,
    ],
];

return Buildtime::run(yii::is2()) ? $app : array_merge($components, ['app' => $app]);
