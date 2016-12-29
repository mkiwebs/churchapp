<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{

    
   public $sourcePath = '@vendor/almasaeed2010';
    public $css = [
    'adminlte/dist/css/AdminLTE.min.css',
    'adminlte/bootstrap/css/bootstrap.min.css',
    '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    'adminlte/dist/css/skins/_all-skins.min.css', 
    'adminlte/plugins/timepicker/bootstrap-timepicker.min.css',
    'adminlte/plugins/iCheck/flat/blue.css',
    'adminlte/plugins/daterangepicker/daterangepicker.css',
    'adminlte/plugins/datepicker/datepicker3.css',

/*      'adminlte/plugins/select2/select2.min.css',
      'adminlte/plugins/morris/morris.css',*/
    ];
    public $js = [   
     'adminlte/bootstrap/js/bootstrap.min.js',
     //'adminlte/plugins/jQuery/jquery-2.2.3.min.js',
      '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
      'adminlte/plugins/iCheck/icheck.min.js',
      //'adminlte/plugins/daterangepicker/daterangepicker.js',
    'adminlte/plugins/datepicker/bootstrap-datepicker.js',
    'adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js',
    'adminlte/plugins/timepicker/bootstrap-timepicker.min.js',
    'adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
    //'adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js',
   // 'adminlte/plugins/input-mask/jquery.inputmask.extensions.js',
    //'adminlte/plugins/input-mask/jquery.inputmask.js',
    'adminlte/plugins/chartjs/Chart.min.js',
    'adminlte/dist/js/app.js',
    'adminlte/plugins/fastclick/fastclick.js',

      //'RGraph/libraries/RGraph.common.core.js',
      //'RGraph/libraries/RGraph.bar.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
