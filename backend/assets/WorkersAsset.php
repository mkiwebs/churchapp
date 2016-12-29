<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class WorkersAsset extends AssetBundle
{
   public $sourcePath = '@vendor/almasaeed2010';
    public $css = [
    'adminlte/plugins/timepicker/bootstrap-timepicker.min.css',
    'adminlte/plugins/daterangepicker/daterangepicker.css',
    'adminlte/plugins/datepicker/datepicker3.css',

/*      'adminlte/plugins/select2/select2.min.css',
      'adminlte/plugins/morris/morris.css',*/
    ];
    public $js = [   
    'adminlte/plugins/daterangepicker/daterangepicker.js',
    'adminlte/plugins/datepicker/bootstrap-datepicker.js',
    'adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js',
    'adminlte/plugins/timepicker/bootstrap-timepicker.min.js',
    'adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js',
   'adminlte/plugins/input-mask/jquery.inputmask.extensions.js',
    'adminlte/plugins/input-mask/jquery.inputmask.js',
    'adminlte/plugins/chartjs/Chart.min.js',
    'adminlte/dist/js/app.js',
    'adminlte/plugins/fastclick/fastclick.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
