<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Disciple */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Disciples'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-view">

    <p class="lead"><?= Html::encode($this->title) ?></p>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->disc_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->disc_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'full_name',
            'id_number',
            'disc_username',
            'disc_password',
            'disc_age',
            'disc_phone',
            'church_id',
            'disc_ruhui_shijian',
            'disc_gender',
            'home_address',
            'disc_profile_photo_url:url',
            'disc_email:email',
            'disc_weixin',
            'disc_zhouzhong',
            'disc_jieshou_date',
            'disc_type',
            'disc_zhiye',
            'disc_jieshaoren',
            'disc_jiedai_yuanyin:ntext',
            'disc_jiedai_didian',
            'disc_birthday',
            'disc_jianhuren',
            'disc_tribe',
            'marriage_status',
            'disc_vision:ntext',
            'disc_baptism_date',
            'disc_gelou',
            'disc_work_place',
        ],
    ]) ?>

</div>
