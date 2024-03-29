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

$components = [
    'authManager' => \yii\rbac\CheckAccessInterface::class,
];

$singletons = [
    \yii\rbac\CheckAccessInterface::class => [
        '__class' => \hipanel\rbac\AuthManager::class,
    ],
    \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
    \hipanel\rbac\console\converter\ConverterInterface::class => [
        '__class' => \hipanel\rbac\console\converter\PhpToNodeFilesConverter::class,
        'storageDir' => dirname(__DIR__) . '/js',
        'convertFile' => dirname(__DIR__) . '/src/files/source/tree.php',
    ],
];

return Buildtime::run(yii::is3())
    ? array_merge($components, $singletons)
    : ['components' => $components, 'container' => ['singletons' => $singletons]]
;
