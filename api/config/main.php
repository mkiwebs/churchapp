<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //'controllerNamespace' => 'app\controllers',
    'timeZone'=>'Asia/Shanghai',
    'components' => [
    //DATABASE
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=churchapp',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

    'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
'request' => [
    'cookieValidationKey' => 'wr2dS4Ex_nptDLA33e7n8',
    'parsers' => [
    'application/json' => 'yii\web\JsonParser',
    'text/json' => 'yii\web\JsonParser',
    ],
    'enableCsrfValidation'=>false, 
],
'log' => [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
    'enablePrettyUrl' => true,
   // 'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' =>['service','disciple']],
    ],
],

    ],
    'params' => $params,
];
