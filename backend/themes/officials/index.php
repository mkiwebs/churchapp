<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OfficialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Officials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="officials-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Add Officials'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'official_id',
            ['attribute' => 'disc_id',
            'value' => 'disciple.full_name',
            "format" => "raw"
            ],

            'church_post',
            'education:ntext',
            'talent:ntext',
            // 'work_desc:ntext',
            // 'vision:ntext',
            // 'family_status',
            // 'expert_category',
            // 'department',
            // 'awards:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
