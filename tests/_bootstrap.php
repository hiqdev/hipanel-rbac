<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

if (class_exists(\Yiisoft\Factory\Definitions\Reference::class)) {
    $config = require \Yiisoft\Composer\Config\Builder::path('console');
    \yii\helpers\Yii::setContainer(new \yii\di\Container($config));
} else {
    require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

    Yii::setAlias('@hipanel/rbac', dirname(__DIR__) . '/src');
    Yii::setAlias('@hipanel/rbac/tests', __DIR__);
}
