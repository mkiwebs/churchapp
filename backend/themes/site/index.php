<?php

/** 
*@var $this yii\web\View 
*Uses the Bootsrap tabs to render a navigation in the dashboard
*
*/
use yii\helpers\Html;
use yii\bootstrap\Tabs;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\grid\GridView;
$this->title = 'Dashboard';
?>
<div class="row">

          <?php echo Tabs::widget([
    'items' => [
        [
            'label' => Yii::t('backend','300 Disciple'),
            'content' => $this->render('themission'),
            'active' => true
        ],
        [
            'label' => Yii::t('backend', 'New Believers'),
            'content' => $this->render('newdiscipledata'),
            'itemOptions' => ['tag' => 'div'],
            'clientOptions' => ['collapsible' => false],
        ],
        [
            'label' => Yii::t('backend', 'University'),
            'content' => $this->render('universitydata'),
        ],
        [
            'label' => Yii::t('backend', 'Camp'),
            'content' => $this->render('campdata'),
        ],
        [
            'label' => Yii::t('backend', 'Workers'),
            'content' => $this->render('workers'),
        ],
    ],
]); ?> 
<?php Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();?>
<div class="service-index">
    <p class="lead text-center"><?php echo Yii::t('backend', 'Sunday Service')?></p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'date',
            'label' => Yii::t('backend', 'Date'),
            'contentOptions' => ['class' => 'bg-maroon'],
             'value' => 'date',
             'format'=>'date'
            ],


             ['attribute' => 'church_id',
             'contentOptions' => ['class' => 'bg-purple'],
             'value' => 'church.church_name',
             "format" => "raw"
             ],
    
            ['attribute' => 'university',
            'contentOptions' => ['class' => 'bg-maroon'],
            'label' => Yii::t('backend', 'University'),
             'value' => 'university'
            ],
             ['attribute' => 'youth',
                        'label' => Yii::t('backend', 'Youth'),
                         'value' => 'youth'
             ],
             ['attribute' => 'sundayschool',
                        'label' => Yii::t('backend', 'Sundayschool'),
                         'value' => 'sundayschool'
                        ],
            ['attribute' => 'new_disciples',
            'label' => Yii::t('backend', 'New Disciples'),
             'value' => 'new_disciples'
            ],            

            ['attribute' => 'kids',
            'label' => Yii::t('backend', 'Kids'),
             'value' => 'kids'
            ],

            ['attribute' => 'experts',
            'label' => Yii::t('backend', 'Experts'),
             'value' => 'experts'
            ],
            
            [
            'header' => 'Total',
            'attribute'=>'serviceAttendance',
            //'contentOptions' => ['class' => 'bg-maroon'],
            'value' => function ($model) {
                return $model->university + $model->youth +$model->sundayschool+$model->kids + $model->experts+ $model->new_disciples;
            }
            ],
        ],
    ]); ?>
</div>

<div class="midweek-index">
    <p class="lead text-center"><?php echo Yii::t('backend', 'midweek service')?></p>
    <?= GridView::widget([
        'dataProvider' => $midweekDataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            ['attribute' => 'date',
            'label' => Yii::t('backend', 'Date'),
            'contentOptions' => ['class' => 'bg-maroon'],
             'value' => 'date',
             'format'=>'date'
            ],
            

            ['attribute' => 'church_id',
            'label' => Yii::t('backend', 'Church name'),
             'value' => 'church.church_name'
            ],
            ['attribute' => 'university',
            'label' => Yii::t('backend', 'University'),
             'value' => 'university'
            ],
             ['attribute' => 'youth',
                        'label' => Yii::t('backend', 'Youth'),
                         'value' => 'youth'
             ],
             ['attribute' => 'sundayschool',
                        'label' => Yii::t('backend', 'Sundayschool'),
                         'value' => 'sundayschool'
                        ],
            ['attribute' => 'new_disciples',
            'label' => Yii::t('backend', 'New Disciples'),
             'value' => 'new_disciples'
            ],            

            ['attribute' => 'kids',
            'label' => Yii::t('backend', 'Kids'),
             'value' => 'kids'
            ],

            ['attribute' => 'experts',
            'label' => Yii::t('backend', 'Experts'),
             'value' => 'experts'
            ],

            [
            'label' => 'Total',
            'value' => function ($model) {
                return $model->university + $model->youth +$model->sundayschool+$model->kids + $model->experts + $model->new_disciples;
            }
            ],
        ],
    ]); ?>
</div>
</div>




