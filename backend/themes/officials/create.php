<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Officials */

$this->title = Yii::t('backend', 'Create Officials');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Officials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="officials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
