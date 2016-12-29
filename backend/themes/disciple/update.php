<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Disciple */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Disciple',
]) . $model->full_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Disciples'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->full_name, 'url' => ['view', 'id' => $model->disc_ID]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="disciple-update">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
