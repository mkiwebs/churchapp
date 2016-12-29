<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Tabs;
$this->title = 'Dashboard';
?>
<div class="row">
 <?php echo Tabs::widget([
    'items' => [
        [
            'label' => '300 Disciple',
            'content' => $this->render('themission'),
            'active' => true
        ],
        [
            'label' => 'New Believers',
            'content' => $this->render('newdiscipledata'),
            'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'nav-tabs-custom'],
    'clientOptions' => ['collapsible' => false],
        ],
        [
            'label' => 'University',
            'content' => $this->render('universitydata'),
        ],
        [
            'label' => 'Camp',
            'content' => $this->render('campdata'),
        ],
        [
            'label' => 'Workers',
            'content' => $this->render('workers'),
        ],
    ],
]); ?>
</div>
<?=
\dosamigos\highcharts\HighCharts::widget([
    'clientOptions' => [
        'chart' => [
                'type' => 'bar'
        ],
        'title' => [
             'text' => 'Fruit Consumption'
             ],
        'xAxis' => [
            'categories' => [
                'Apples',
                'Bananas',
                'Oranges'
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Fruit eaten'
            ]
        ],
        'series' => [
            ['name' => 'Jane', 'data' => [1, 0, 4]],
            ['name' => 'John', 'data' => [5, 7, 3]]
        ]
    ]
]);



