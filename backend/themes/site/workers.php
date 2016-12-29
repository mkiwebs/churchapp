<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Tabs;
use miloschuman\highcharts\Highcharts;
 use yii\jui\DatePicker;
$this->title = 'Workers';
?>
<p class="lead"><?php echo $this->title;?></p>

<div class="row">
<div class="box box-primary">
<div class="box-header">
  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">总人数</a></li>
              <li><a href="#tab_2" data-toggle="tab">地教会</a></li>
              <li><a href="#tab_3" data-toggle="tab">专门别</a></li>
              <li><a href="#tab_4" data-toggle="tab">地教会</a></li>
              <li><a href="#tab_5" data-toggle="tab">大学</a></li>
              <li><a href="#tab_6" data-toggle="tab">青少年</a></li>
              <li><a href="#tab_7" data-toggle="tab">主日学</a></li>
              <li><a href="#tab_8" data-toggle="tab">幼儿园</a></li>
              
            </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
                 
            <div class="col-xs-2">
             <!-- Date range -->

              <div class="form-group">
                
                <div class="input-group"><span>From</span>
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <p><?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?></p>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                
                <div class="input-group"><span>From</span>
  

                <p>  <?= yii\jui\AutoComplete::widget([
                'name' => 'country',
                'clientOptions' => [
                'source' => ['USA', 'IND','KEN', 'UG','CHN', 'JAP','AUS', 'TZ'],
                ],
                ]); ?></p>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
             
            <div class="col-xs-2">
             <!-- Date range -->
              <div class="form-group">

                <div class="input-group">
                    <span>To</span>
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"><?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?></i>
                  
                  <p></p></div>
                </div> 
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>

             <div class="col-xs-2">
             <button class="btn btn-primary">Search</button>
            </div>

        <button type="button" class="btn btn-danger btn-flat margin">Sunday Service</button>               
        <button type="button" class="btn btn-success btn-flat margin">Midweek</button>
        <button type="button" class="btn btn-warning btn-flat margin">New Believers</button>
          <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB1'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ],
      'credits' => ['enabled' => false],
   ]
]);?>

</div>
              </div> <!-- End of tab_1 -->

              <div class="tab-pane" id="tab_2">
                The languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.

                <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB2'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ],
      'credits' => ['enabled' => false],
   ]
]);?>

</div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB3'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);?>

 </div>
              <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB4'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ],
      'credits' => ['enabled' => false],
   ]
]);?>

 </div>
              <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
                <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB5'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);?>

</div>
 </div>
              <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_6">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
                <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB6'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);?>

</div>
 </div>
              <!-- /.tab-pane -->
  <div class="tab-pane" id="tab_7">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
                <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB7'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);?>

</div>
 </div>
              <!-- /.tab-pane -->
  <div class="tab-pane" id="tab_8">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
                <div class="row">

<?php echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'TAB8'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['type' => 'column','name' => 'Jane', 'data' => [1, 0, 4]],
         ['type' => 'column','name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);?>

</div>
 </div>
              <!-- /.tab-pane -->
</div><!-- /.tab-content --> 

</div><!-- nav-tabs-custom -->
  

</div>
</div><!--box-primary-->

</div>