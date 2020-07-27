<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = require Yiisoft\Composer\Config\Builder::path('frontend');
$params = require Yiisoft\Composer\Config\Builder::path('params_frontend');
$configp["params"] = $params;

(new yii\web\Application($config))->run();