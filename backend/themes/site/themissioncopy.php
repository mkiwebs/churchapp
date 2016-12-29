<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
$this->title = "The 300 Disciples data";
?>
<div class="site-error">
<?php echo  Highcharts::widget([
    'scripts' => [
        'modules/exporting',
        'themes/grid-light',
    ],
    'options' => [

        'chart'=>[
             'type'=>'column'
               ],
        'title' => [
            'text' => '300 Disciples',
        ],
        'subtitle'=>[
            'text'=>'IMMANUEL INTL CHURCH'
        ],
        'xAxis' => [
            'categories' => [
            'Jan', 
            'Feb', 
            'March', 
            'April',             
            'May',
            'Jun', 
            'Jul', 
            'Aug', 
            'Sept',
            'Oct', 
            'Nov', 
            'Dec'
             ],
             'crosshair'=>true,
        ],
        
        'yAxis'=>[
            'min'=> 0,
            'title'=> [
                'text' => '人数'
            ]
        ],
         'tooltip'=> [
            'shared'=> true,
            'useHTML'=>true
        ],

        'series' => [


            [
                'name' => 'Total Attendance',
                'data' => [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            ],

            [
                'name' => 'Midweek',
                'data' => [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3],
            ],


            [
                'name' => 'New Disciples',
                'data' => [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
            ],

        ],
         'plotOptions'=>[
         'column'=>[
               'pointPadding'=> 0.2,
               'borderWidth' => 0
               ],
         ],
         'credits' => ['enabled' => false],
    ]
]);?>

</div>

