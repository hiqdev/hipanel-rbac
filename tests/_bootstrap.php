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

// The package is tested standalone (vendor/ one level up from tests/) as
// well as from inside a parent project where it's installed as a dependency
// (vendor/hiqdev/hipanel-rbac/tests/_bootstrap.php, with the parent's
// vendor/autoload.php three levels up). Support both layouts.
if (is_dir(__DIR__ . '/../vendor')) {
    $autoload = __DIR__ . '/../vendor/autoload.php';
    $yii2 = __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
} else {
    $autoload = __DIR__ . '/../../../autoload.php';
    $yii2 = __DIR__ . '/../../../yiisoft/yii2/Yii.php';
}

require_once $autoload;

if (class_exists(\Yiisoft\Factory\Definitions\Reference::class)) {
    $config = require \Yiisoft\Composer\Config\Builder::path('console');
    \yii\helpers\Yii::setContainer(new \yii\di\Container($config));
} else {
    require_once $yii2;

    Yii::setAlias('@hipanel/rbac', dirname(__DIR__) . '/src');
    Yii::setAlias('@hipanel/rbac/tests', __DIR__);
}
