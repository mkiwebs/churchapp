<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use miloschuman\highcharts\Highstock;
use yii\web\JsExpression;
$this->title = "Disciple";
$this->registerJs('$.getJSON("//www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?", myCallbackFunction);');
?>
<div class="row">

<?php echo \dosamigos\highcharts\HighCharts::widget([
    'clientOptions' => [
        'chart' => [
                'type' => 'bar'
        ],
        'title' => [
             'text' => 'Fruit1 Consumption'
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
        ],
      'credits' => ['enabled' => false],
    ]
]);?>

</div>
<div class="site-error">

    <p class="lead"><?= Html::encode($this->title) ?></p>
              <div class="row">
             
       <?php 

echo Highstock::widget([
    // The highcharts initialization statement will be wrapped in a function
    // named 'mycallbackFunction' with one parameter: data.
    'callback' => 'myCallbackFunction',
    'options' => [
        'rangeSelector' => [
            'inputEnabled' => new JsExpression('$("#container").width() > 480'),
            'selected' => 1
        ],
        'title' => [
            'text' => 'AAPL Stock Price'
        ],
        'series' => [
            [
                'name' => 'AAPL Stock Price',
                'data' => new JsExpression('data'), // Here we use the callback parameter, data
                'type' => 'areaspline',
                'threshold' => null,
                'tooltip' => [
                    'valueDecimals' => 2
                ],
                'fillColor' => [
                    'linearGradient' => [
                        'x1' => 0,
                        'y1' => 0,
                        'x2' => 0,
                        'y2' => 1
                    ],
                    'stops' => [
                        [0, new JsExpression('Highcharts.getOptions().colors[0]')],
                        [1, new JsExpression('Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get("rgba")')]
                    ]
                ]
            ]
        ]
    ]
]);?>


              </div> <!-- The graph ends here -->

</div>


