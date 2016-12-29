<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Midweek */

$this->title = Yii::t('backend', 'Create Midweek');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Midweeks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="midweek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
