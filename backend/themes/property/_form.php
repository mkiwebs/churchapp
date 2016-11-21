<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Property */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wuzi_leibie')->textInput() ?>

    <?= $form->field($model, 'wuzi_mingcheng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wuzi_xinghao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wuzi_status')->textInput() ?>

    <?= $form->field($model, 'wuzi_quantity')->textInput() ?>

    <?= $form->field($model, 'wuzi_guanliyuan')->textInput() ?>

    <?= $form->field($model, 'wuzi_gengxin_status')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
