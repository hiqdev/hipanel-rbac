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

$components = [
    'authManager' => [
        '__class' => \hipanel\rbac\AuthManager::class,
    ],
];

$singletons = [
    \yii\rbac\CheckAccessInterface::class => \hipanel\rbac\AuthManager::class,
    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
];

return yii::is3()
    ? array_merge($components, $singletons)
    : ['components' => $components, 'container' => ['singletons' => $singletons]];
