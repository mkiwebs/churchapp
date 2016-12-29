<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'church_id')->textInput() ?>

    <?= $form->field($model, 'university')->textInput() ?>

    <?= $form->field($model, 'youth')->textInput() ?>

    <?= $form->field($model, 'sundayschool')->textInput() ?>

    <?= $form->field($model, 'new_disciples')->textInput() ?>

    <?= $form->field($model, 'kids')->textInput() ?>

    <?= $form->field($model, 'experts')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
