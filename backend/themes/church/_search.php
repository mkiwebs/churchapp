<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChurchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="church-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'church_id') ?>

    <?= $form->field($model, 'church_name') ?>

    <?= $form->field($model, 'church_address') ?>

    <?= $form->field($model, 'church_pastor') ?>

    <?= $form->field($model, 'church_service_time') ?>

    <?php // echo $form->field($model, 'church_renshu') ?>

    <?php // echo $form->field($model, 'church_contact_info') ?>

    <?php // echo $form->field($model, 'church_vision') ?>

    <?php // echo $form->field($model, 'church_mission') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
