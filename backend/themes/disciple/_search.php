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
    <?php ActiveForm::end(); ?>

</div>
