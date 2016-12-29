<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Church */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="church-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'church_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'church_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'church_pastor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'church_service_time')->textInput() ?>

    <?= $form->field($model, 'church_renshu')->textInput() ?>

    <?= $form->field($model, 'church_contact_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'church_vision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'church_mission')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
