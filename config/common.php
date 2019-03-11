<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

$components = [
    'authManager' => [
        '__class' => \hipanel\rbac\AuthManager::class,
    ],
];

$singletons = [
    \yii\rbac\CheckAccessInterface::class => class_exists('Yii')
        ? \yii\di\Instance::of('authManager')
        : \yii\di\Reference::to('authManager')
    ,
    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
];

return class_exists('Yii') ? [
    'components' => $components,
    'container' => [
        'singletons' => $singletons,
    ],
] : array_merge($components, $singletons);
