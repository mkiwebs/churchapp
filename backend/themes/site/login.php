<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="hold-transition login-page">
<div class="login-box">
 <div class="login-logo">
    <a href="../../index2.html"><b>Church</b>APP</a>
  </div>
 <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please fill out the following fields to login:</p>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
         <?= $form->field($model, 'username',
            [  
            'options'=>[
                      'tag'=>'div',
                      'class'=>'form-group field-loginform-username has-feedback required'
                    ],
                     'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span> {error}{hint}'
            ]

            )->textInput(['autofocus' => true])
                                            ->label(Yii::t('backend/backend', 'username')) ?>
      </div>
      <div class="form-group has-feedback">
         <?= $form->field($model, 'password',
            ['options'=>[
                  'tag'=>'div',
                  'class'=>'form-group field-loginform-password has-feedback required'
                ],
                 'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span> {error}{hint}'
                ]

         )->passwordInput()->label(Yii::t('backend/backend', 'Password')) ?>

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
        </div>
        <!-- /.col -->
      </div>
    </form>
 <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
    <?php ActiveForm::end(); ?>
  </div>
</div>
</body>
