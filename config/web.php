<?php
$config =  [
    'id' => 'minhaaplicacao',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ],
        'assetManager' => [
              'appendTimestamp' => true,
              'forceCopy' => YII_ENV_DEV ? true : false,
              // 'linkAssets' => YII_ENV_DEV ? true : false,
              //em modo desenvolvimento usar linkAssets ou forceCopy
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}
return $config;
