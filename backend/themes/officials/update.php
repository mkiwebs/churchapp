<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Officials */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Officials',
]) . $model->official_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Officials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->official_id, 'url' => ['view', 'id' => $model->official_id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="officials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
