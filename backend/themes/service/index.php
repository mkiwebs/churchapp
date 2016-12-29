<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Service;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Services');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>
   <?=
\dosamigos\highcharts\HighCharts::widget([
    'clientOptions' => [
        'chart' => [
                'type' => 'bar'
        ],
        'title' => [
             'text' => 'Fruit Consumption'
             ],
        'xAxis' => [
            'categories' => [
                'Apples',
                'Bananas',
                'Oranges1',
                'Bananas1',
                'Oranges1'
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Fruit eaten'
            ]
        ],
        'series' =>[backend\models\Service::getData()],
    ]
]);?>


  <?php 
  foreach ($serviceData as $thedata) {
      # code...
    $churchId = $thedata->church_id;

    echo "ID ".$thedata->church_id.'<br>';
    echo "UN".$thedata->university.'<br>';
    echo "KI ".$thedata->kids.'<br>';
    echo "YH ".$thedata->youth.'<br>';
    echo "TOTAL = ".$thedata->kids.'<br>';
    echo "YH ".$thedata->youth.'<br>';
/*Array ( 
   [0] => Array( 
    [Month] => 08-2016 
    [SUM(youth)] => 223 
    )

  [1] => Array (
   [Month] => 09-2016 
   [SUM(youth)] => 823 
   )

  [2] => Array ( 
    [Month] => 10-2016 
    [SUM(youth)] => 223 ) 

  [3] => Array ( 
    [Month] => 11-2016
     [SUM(youth)] => 44 ) 

  [4] => Array ( 
    [Month] => 12-2016
   [SUM(youth)] => 264 ) 
  ) 
*/

/*Array ( 
  [0] => Array ( 
    [Month] => 08-2016 
    [Sum] => 223 
    ) 

  [1] => Array ( 
    [Month] => 09-2016 
    [Sum] => 823 
    ) 

  [2] => Array ( 
    [Month] => 10-2016 
    [Sum] => 223 
    ) 
  [3] => Array ( 
    [Month] => 11-2016 
    [Sum] => 44 
    ) 

  [4] => Array ( 
    [Month] => 12-2016 
    [Sum] => 264 
    ) 

  )*/ 


/*Best Array Ever


Array (
 [0] => Array (
    [Month] => 08-2016 
    [Youth] => 223 
    [Kids] => 526 
    [Sundayschool] => 41 
    [NewDisc] => 234 
    [Experts] => 880 
  ) 

 [1] => Array ( 
  [Month] => 09-2016 
  [Youth] => 823 
  [Kids] => 26 
  [Sundayschool] => 111
  [NewDisc] => 13
  [Experts] => 98 
    ) 

 [2] => Array ( 
  [Month] => 10-2016 
  [Youth] => 223 
  [Kids] => 526 
  [Sundayschool] => 111 
  [NewDisc] => 13
  [Experts] => 88 
   ) 

 [3] => Array (
  [Month] => 11-2016 
  [Youth] => 44 
  [Kids] => 67 
  [Sundayschool] => 50 
  [NewDisc] => 127 
  [Experts] => 47 
  ) 

 [4] => Array ( 
  [Month] => 12-2016 
  [Youth] => 264
  [Kids] => 99 
  [Sundayschool] => 33 
  [NewDisc] => 25
  [Experts] => 153 
  ) 
 )*/
/*Array ( [0] => 223 [1] => 823 [2] => 223 [3] => 44 [4] => 264 )
Array ( [0] => 234 [1] => 13 [2] => 13 [3] => 127 [4] => 25 ) 
Array ( [0] => 526 [1] => 26 [2] => 526 [3] => 67 [4] => 99 )
*/
  }
  print_r(Service::getTheYouth());
  print_r(Service::getTheNew());
print_r(Service::getTheKids());
  ?>
  <?=  var_dump( Service::rowSql());?>
    <p>
        <?= Html::a(Yii::t('backend', 'Create Service'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'date',
            //'church_id',
             ['attribute' => 'church_id',
             'value' => 'church.church_name',
             "format" => "raw"
             ],
            'university',
            'youth',
            'sundayschool',
            'new_disciples',
            'kids',
            'experts',
            //'serviceAttendance'=>backend\models\Service::$countKids,
            [
            'attribute'=>'serviceAttendance',
            //'label' => 'Total',
            'value' => function ($model) {
                return $model->university + $model->youth +$model->sundayschool+$model->kids + $model->experts+ $model->new_disciples;
            }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
