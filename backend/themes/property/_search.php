<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PropertySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wuzi_id') ?>

    <?= $form->field($model, 'wuzi_leibie') ?>

    <?= $form->field($model, 'wuzi_mingcheng') ?>

    <?= $form->field($model, 'wuzi_xinghao') ?>

    <?= $form->field($model, 'wuzi_status') ?>

    <?php // echo $form->field($model, 'wuzi_quantity') ?>

    <?php // echo $form->field($model, 'wuzi_guanliyuan') ?>

    <?php // echo $form->field($model, 'wuzi_gengxin_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
