<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Church */

$this->title = Yii::t('backend', 'Create Church');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Churches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="church-create">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
