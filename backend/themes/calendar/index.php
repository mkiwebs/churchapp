<?php

use yii\helpers\Html;
use marekpetras\calendarview\CalendarView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Calendars');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-index">
    <p>
        <?= Html::a(Yii::t('backend', 'Add Event'), ['create'], ['class' => 'pull-right btn btn-success']) ?>
    </p>
   <?php 

echo CalendarView::widget(
    [
        // mandatory
        'dataProvider'  => $dataProvider,
        'dateField'     => 'date',
        'valueField'    => 'event_title',


        // optional params with their defaults
        'unixTimestamp' => false, // indicate whether you use unix timestamp instead of a date/datetime format in the data provider
        'weekStart' => 1, // date('w') // which day to display first in the calendar
        'title'     => Html::label(Yii::t('backend', 'Church Calendar'), ['class' => 'p text-center']),

        'views'     => [
            'calendar' => '@vendor/marekpetras/yii2-calendarview-widget/views/calendar',
            'month' => '@vendor/marekpetras/yii2-calendarview-widget/views/month',
            'day' => '@vendor/marekpetras/yii2-calendarview-widget/views/day',
        ],

        'startYear' => date('Y') - 1,
        'endYear' => date('Y') + 1,

        //'link' => false,
        /* alternates to link , is called on every models valueField, used in Html::a( valueField , link )*/
        'link' => 'calendar/view',
        'link' => function($model,$calendar){
            return ['calendar/view','id'=>$model->id];
        },
        

        'dayRender' => false,
        /* alternate to dayRender
        'dayRender' => function($model,$calendar) {
            return '<p>'.$model->id.'</p>';
        },
        */

    ]
);?>
</div>
