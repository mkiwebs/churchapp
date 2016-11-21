<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Church */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Church',
]) . $model->church_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Churches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->church_name, 'url' => ['view', 'id' => $model->church_id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="church-update">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
