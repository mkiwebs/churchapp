<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Church */

$this->title = $model->church_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Churches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="church-view">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->church_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->church_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'church_id',
            'church_name',
            'church_address',
            'church_pastor',
            'church_service_time',
            'church_renshu',
            'church_contact_info:ntext',
            'church_vision',
            'church_mission',
        ],
    ]) ?>

</div>
