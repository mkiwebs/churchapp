<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{

    
   public $sourcePath = '@vendor/almasaeed2010';
    public $css = [
    'adminlte/dist/css/AdminLTE.min.css',
    'adminlte/bootstrap/css/bootstrap.min.css',
    '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    'adminlte/dist/css/skins/_all-skins.min.css', 
    'adminlte/plugins/iCheck/square/blue.css',
    ];
    public $js = [   
     'adminlte/bootstrap/js/bootstrap.min.js',
     'adminlte/plugins/jQuery/jquery-2.2.3.min.js',
      '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
      'adminlte/plugins/iCheck/icheck.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
