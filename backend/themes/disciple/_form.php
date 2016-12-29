<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Disciple */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciple-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_age')->textInput() ?>

    <?= $form->field($model, 'disc_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'church_id')->textInput() ?>

    <?= $form->field($model, 'disc_ruhui_shijian')->textInput() ?>

    <?= $form->field($model, 'disc_gender')
         ->radioList(['1' => 'Male',
              '2' => 'Female'])?>

    <?= $form->field($model, 'home_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_profile_photo_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_weixin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_zhouzhong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_jieshou_date')->textInput() ?>

    <?= $form->field($model, 'disc_type')
             ->radioList(['1' => 'Youth',
              '2' => 'University',
             '3' => 'Baby',
              '4' => 'Sunday School',
              '5' => 'New Believers']) ?>

    <?= $form->field($model, 'disc_zhiye')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_jieshaoren')->textInput() ?>

    <?= $form->field($model, 'disc_jiedai_yuanyin')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disc_jiedai_didian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_birthday')->textInput() ?>

    <?= $form->field($model, 'disc_jianhuren')->textInput() ?>


    <?= $form->field($model, 'disc_tribe')
      ->dropDownList([
        '1'=>'Hanzu',
        '2'=>'Minority',
        '3'=>'Foreigner'
        ],

        ['prompt'=>'Select Tribe'])
    ?>

    <?= $form->field($model, 'marriage_status')
    ->dropDownList([
        '1'=>'Single',
        '2'=>'Married',
        '3'=>'Widowed',
        '4'=>'Divorced'
        ],

        ['prompt'=>'Select Marriage Status'])
        ?>

    <?= $form->field($model, 'disc_vision')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disc_baptism_date')->textInput() ?>

    <?= $form->field($model, 'disc_gelou')->textInput() ?>

    <?= $form->field($model, 'disc_work_place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
