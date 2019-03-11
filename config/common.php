<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

use yii\helpers\Yii;

$components = [
    'authManager' => [
        '__class' => \hipanel\rbac\AuthManager::class,
    ],
];

$singletons = [
    \yii\rbac\CheckAccessInterface::class => class_exists(Yii::class)
        ? \yii\di\Reference::to('authManager')
        : \yii\di\Instance::of('authManager')
    ,
    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
];

return !class_exists(Yii::class) ? [
    'components' => $components,
    'container' => [
        'singletons' => $singletons,
    ],
] : array_merge($components, $singletons);
