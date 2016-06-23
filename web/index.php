<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');

// Including the Yii framework itself
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

ini_set('display_errors', true);

// Getting the configuration
$config = require(__DIR__ . '/../config/web.php');

// Making and launching the application immediately
(new yii\web\Application($config))->run();
