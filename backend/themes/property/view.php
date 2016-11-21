<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Property */

$this->title = $model->wuzi_mingcheng;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Properties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-view">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->wuzi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->wuzi_id], [
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
            'wuzi_leibie',
            'wuzi_mingcheng',
            'wuzi_xinghao',
            'wuzi_status',
            'wuzi_quantity',
            'wuzi_guanliyuan'=>'disciple.full_name',
            'wuzi_gengxin_status:ntext',
        ],
    ]) ?>

</div>
