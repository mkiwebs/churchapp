<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
$this->title = "New Disciples data";
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
            'text' => 'University Data',
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


        'series' =>backend\models\Service::getData(),

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


