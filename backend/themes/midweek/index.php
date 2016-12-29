<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MidweekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Midweeks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="midweek-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Midweek'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'date:date',
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
            [
            'label' => 'Total',
            'value' => function ($model) {
                return $model->university + $model->youth +$model->sundayschool+$model->kids + $model->experts + $model->new_disciples;
            }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
