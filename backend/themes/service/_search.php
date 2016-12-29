<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'service_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'church_id') ?>

    <?= $form->field($model, 'university') ?>

    <?= $form->field($model, 'youth') ?>

    <?php // echo $form->field($model, 'sundayschool') ?>

    <?php // echo $form->field($model, 'new_disciples') ?>

    <?php // echo $form->field($model, 'kids') ?>

    <?php // echo $form->field($model, 'experts') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
