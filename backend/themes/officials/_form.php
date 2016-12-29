<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Officials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="officials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disc_id')->textInput() ?>

    <?= $form->field($model, 'church_post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'talent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'work_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vision')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expert_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'awards')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
