<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DiscipleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciple-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
            <div class="box-body">
              <div class="row">
                <div class="form-group">
              <?= $form->field($model, 'globalRoomSearch')
                        ->label(false)
                        ->textInput(['placeholder'=>'Enter keyword to search']);
                  ?>
                </div>

                <div class="form-group">      
                 <?= Html::submitButton('Search', ['class' => 'btn btn-lg btn-success pull-right']) ?>
                </div>
              </div>
            </div>

 <!-- <div class="box box-info">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-2">
                  <?= $form->field($model, 'full_name')->textInput(['placeholder' => "Full Name"])->label(false) ?>
                </div>
                <div class="col-xs-2">
                  <?= $form->field($model, 'disc_age')->textInput(['placeholder' => "Age"])->label(false) ?>
                </div>
                <div class="col-xs-2">
                   <?= $form->field($model, 'church_id')->textInput(['placeholder' => "Church"])->label(false) ?>
                </div>
                <div class="col-xs-2">
                  <?php  echo $form->field($model, 'disc_gender')->dropDownList([
                             '1'=>'Male',
                             '2'=>'Female'],
                             ['prompt'=>'Select Gender'])
                             ->label(false) ?>
                </div>
                <div class="col-xs-2">
                 <?php  echo $form->field($model, 'disc_type')
                 ->dropDownList(['1' => 'Youth',
              '2' => 'University',
             '3' => 'Baby',
              '4' => 'Sunday School',
              '5' => 'New Believers'],
              ['prompt'=>'Select Type'])->label(false) 
                 ?>
                </div>
                <div class="col-xs-2">
                    <?php  echo $form->field($model, 'disc_gelou')->textInput(['placeholder' => "Gelou"])->label(false) ?>
                </div>
              </div>
            </div>
            
          </div>  -->                       

    <?php // echo $form->field($model, 'disc_phone') ?>

    <?php // echo $form->field($model, 'disc_ruhui_shijian') ?>

    <?php // echo $form->field($model, 'home_address') ?>

    <?php // echo $form->field($model, 'disc_profile_photo_url') ?>

    <?php // echo $form->field($model, 'disc_email') ?>

    <?php // echo $form->field($model, 'disc_weixin') ?>

    <?php // echo $form->field($model, 'disc_zhouzhong') ?>

    <?php // echo $form->field($model, 'disc_jieshou_date') ?>

    <?php // echo $form->field($model, 'disc_zhiye') ?>

    <?php // echo $form->field($model, 'disc_jieshaoren') ?>

    <?php // echo $form->field($model, 'disc_jiedai_yuanyin') ?>

    <?php // echo $form->field($model, 'disc_jiedai_didian') ?>

    <?php // echo $form->field($model, 'disc_birthday') ?>

    <?php // echo $form->field($model, 'disc_jianhuren') ?>

    <?php // echo $form->field($model, 'disc_tribe') ?>

    <?php // echo $form->field($model, 'marriage_status') ?>

    <?php // echo $form->field($model, 'disc_vision') ?>

    <?php // echo $form->field($model, 'disc_baptism_date') ?>

    <?php // echo $form->field($model, 'disc_work_place') ?>

    <div class="form-group pull-right">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary ']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
