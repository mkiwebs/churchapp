<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Property */

$this->title = Yii::t('backend', 'Edit {modelClass}: ', [
    'modelClass' => 'Property',
]) . $model->wuzi_mingcheng;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Properties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wuzi_mingcheng, 'url' => ['view', 'id' => $model->wuzi_id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Edit');
?>
<div class="property-update">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
