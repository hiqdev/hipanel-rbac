<?php

error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::setAlias('@hipanel/rbac', dirname(__DIR__) . '/src');
Yii::setAlias('@hipanel/rbac/tests', __DIR__);
