<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Disciple */

$this->title = Yii::t('backend', 'Create Disciple');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Disciples'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-create">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
