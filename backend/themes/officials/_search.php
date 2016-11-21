<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OfficialsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="officials-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<div class="box box-info">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-2">
                  <?= $form->field($model, 'church_post')->textInput(['placeholder' => "Church Post"])->label(false) ?>
                </div>
                <div class="col-xs-2">
                  <?= $form->field($model, 'department')->textInput(['placeholder' => "Department"])->label(false) ?>
                </div>
                <div class="col-xs-2">
                   <?= $form->field($model, 'disc_id')->textInput(['placeholder' => "Full name"])->label(false) ?>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div> 


    <?php // echo $form->field($model, 'work_desc') ?>

    <?php // echo $form->field($model, 'vision') ?>

    <?php // echo $form->field($model, 'family_status') ?>

    <?php // echo $form->field($model, 'expert_category') ?>

    <?php // echo $form->field($model, 'awards') ?>

    <div class="form-group pull-right">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
