<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChurchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Churches');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="church-index">

   <p class="lead"><?= Html::encode($this->title) ?></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Church'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'church_id',
            'church_name',
            'church_address',
            'church_pastor',
            'church_service_time',
            'church_renshu',
            'church_contact_info:ntext',
            // 'church_vision',
            // 'church_mission',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
