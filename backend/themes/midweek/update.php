<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Midweek */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Midweek',
]) . $model->midweek_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Midweeks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->midweek_id, 'url' => ['view', 'id' => $model->midweek_id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="midweek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
