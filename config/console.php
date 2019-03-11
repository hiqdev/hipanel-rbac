<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

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

return class_exists(\yii\helpers\Yii::class) ? array_merge($components, ['app' => $app]) : $app;
