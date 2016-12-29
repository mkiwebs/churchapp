<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Midweek */

$this->title = $model->midweek_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Midweeks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="midweek-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->midweek_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->midweek_id], [
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
            'midweek_id',
            'date',
            'church_id',
            'university',
            'youth',
            'sundayschool',
            'new_disciples',
            'kids',
            'experts',
        ],
    ]) ?>

</div>
