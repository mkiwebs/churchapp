<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PropertySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Properties');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Add Property'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
            'attribute' =>'wuzi_leibie',
            'format' => 'raw',
            'value' => function ($data) {   
                        if ($data->wuzi_leibie === 1 )
                           {
                                                       
                             return  $propertyType = "Daily Use";
                            } 
                         elseif ($data->wuzi_leibie === 2) {
                               return  $propertyType = "Electronics";
                           }  
                         elseif ($data->wuzi_leibie === 3) {
                             return  $propertyType = "Communion";
                         }
                        else{
                             return  $propertyType = "Youths";
                         }
                       }

            ],

            'wuzi_mingcheng',
            'wuzi_xinghao',
            //'wuzi_status',
            'wuzi_quantity',

            ['attribute' => 'wuzi_guanliyuan',
             'value' => 'disciple.full_name',
             "format" => "raw"
             ],
            //'wuzi_gengxin_status:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
