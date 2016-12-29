<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    //'bootstrap' => ['log'],
   'bootstrap' => ['log',
        [
            'class' => 'common\components\LanguageSelector',
            'supportedLanguages' => ['en-US', 'zh-CN'],
        ]
    ],
    'modules' => [
        'admin' => [
                    'class' => 'mdm\admin\Module',
                ],

         'setting' => [

                'class' => 'backend\modules\setting\Module',

            ],
        ],
    'components' => [


/*'assetManager' => [
    'bundles' => [
        'yii\web\JqueryAsset' => [
            'js'=>[]
        ],
        'yii\bootstrap\BootstrapPluginAsset' => [
            'js'=>[]
        ],
        'yii\bootstrap\BootstrapAsset' => [
            'css' => [],
        ],

    ],
],
*/
'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
        ],
    ],
    'view'=>[
            'theme'=>[
            'pathMap'=>[
            '@app/views'=>'@app/themes',
            ],
        ],],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
    ],
    'params' => $params,
];
