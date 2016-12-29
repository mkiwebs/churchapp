<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DiscipleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Disciples');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a(Yii::t('backend', 'Add Disciple'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'disc_ID',
            'full_name',
            //'id_number',
            //'disc_username',
            //'disc_password',
            'disc_age',
            'disc_phone',

            ['attribute' => 'church_id',
             'value' => 'church.church_name',
             "format" => "raw"
             ],

            // 'disc_ruhui_shijian',

              [
            'attribute' =>'disc_gender',
            'format' => 'raw',
            'value' => function ($data) {   
                        if ($data->disc_gender ===1 )
                           {
                                                       
                             return  $discGender = "Male";
                            } 
                         else  
                         {
                             return  $discGender = "Female";
                         }
                       }

            ],
            // 'home_address',
            // 'disc_profile_photo_url:url',
            // 'disc_email:email',
             'disc_weixin',
            // 'disc_zhouzhong',
            // 'disc_jieshou_date',
 
            [
            'attribute' =>'disc_type',
            'format' => 'raw',
            'value' => function ($data) {   
                        if ($data->disc_type ===1 )
                           {
                            
                            $discType = "Youth";
                             return $discType ;
                            } 
                         else if ($data->disc_type === 2) 
                         {
                             $discType = "University";
                              return $discType ;
                         }
                         
                         else if ($data->disc_type === 3) {
                             $discType = "Baby";
                              return $discType ;
                         }
                       elseif ($data->disc_type === 4) {
                             $discType = "Sunday School";
                              return $discType ;
                         }
                        elseif ($data->disc_type === 5) {
                            $discType = "New Believer";
                             return $discType ;
                         }

                        
                     },

            ],
            // 'disc_zhiye',
            // 'disc_jieshaoren',
            // 'disc_jiedai_yuanyin:ntext',
            // 'disc_jiedai_didian',
            // 'disc_birthday',
            // 'disc_jianhuren',
            // 'disc_tribe',
            // 'marriage_status',
            // 'disc_vision:ntext',
            // 'disc_baptism_date',
            // 'disc_gelou',
            'disc_work_place',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
