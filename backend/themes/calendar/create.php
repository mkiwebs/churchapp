<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Calendar */

$this->title = Yii::t('backend', 'Add Event');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Calendars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-create">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
