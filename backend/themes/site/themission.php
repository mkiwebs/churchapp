<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
use yii\jui\Draggable;
use yii\jui\Resizable;
use backend\models\Service;
$this->title = "The 300 Disciples data";

      $query=Yii::$app->db->createCommand('SELECT DATE_FORMAT(date, "%m-%Y") 
        AS month, SUM(youth) AS youth FROM sunday_service GROUP BY DATE_FORMAT(date, "%m-%Y")')
            ->queryAll();
   (int)$theDat=json_encode(Service::getTheYouth(),JSON_NUMERIC_CHECK);
print_r("The data ".$theDat);

     
    (int)$youth_sum  = array_column($query, 'youth');
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

        'series' =>$query,

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

