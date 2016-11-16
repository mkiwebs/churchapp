<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //set target language to chinese
    // 'language'=>'zh-CN',
    'language'=>'en', // back to English

     'name'=>'Churchapp',
      'timeZone'=>'Asia/Shanghai',
    'aliases'=>[

        '@customIcons'=>'@backend/web/uploads/customIcons/',
        '@profilePics'=>'@backend/web/uploads/profilePics/',
        '@videos'=>'@backend/web/uploads/videos/',
        '@fileDocs'=>'@backend/web/uploads/fileDocs/',
    ],
    'components' => [

        //TRANSLATION SETTINGS
    'i18n' => [
        'translations' => [
            'frontend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
            ],
            'backend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
            ],
        ],
    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
