<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

return [
    \yii\rbac\CheckAccessInterface::class => \yii\di\Reference::to('authManager'),
    'authManager' => [
        '__class' => \hipanel\rbac\AuthManager::class,
    ],

    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
];
