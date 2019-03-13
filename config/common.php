<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

use hiqdev\yii\compat\yii;

$components = [
    'authManager' => [
        yii::classKey() => \hipanel\rbac\AuthManager::class,
    ],
];

$singletons = [
    \yii\rbac\CheckAccessInterface::class => yii::referenceTo('authManager'),
    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
];

return yii::is2() ? [
    'components' => $components,
    'container' => [
        'singletons' => $singletons,
    ],
] : array_merge($components, $singletons);
