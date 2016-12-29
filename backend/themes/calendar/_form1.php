<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
//use yii\jui\DatePicker；
/* @var $this yii\web\View */
/* @var $model backend\models\Calendar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calendar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>
    <?= $form->field($model,'date')->widget(yii\jui\DatePicker::className(),
    	[
   'name' => 'date',
   'language' => Yii::$app->language,
   
 'clientOptions' => [
 'format' => 'yyyy-mm-dd H:i:s',
    'changeMonth' => true,
    'yearRange' => '1996:2099',
    'changeYear' => true,
    'showOn' => 'button',
    'buttonImage' => 'images/calendar.gif',
    'buttonImageOnly' => true,
    'buttonText' => 'Select date'
],
]) ?>

<?= DateTimePicker::widget([
	'model' => $model,
	'attribute' => 'date',
	'options' => ['placeholder' => 'Enter event time '],
	'pluginOptions' => [
		'autoclose' => true
	]
]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
