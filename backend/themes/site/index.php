<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ListView;
$this->title = 'Dashboard';
?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Disciples</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>University</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

 <div class="row">
  <script src="RGraph/libraries/RGraph.common.core.js"></script>
<script src="RGraph/libraries/RGraph.bar.js"></script>      
          <!-- Custom Tabs (Pulled to the right) -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
      <li class="active"><a href="#tab_1-1" data-toggle="tab">Workers</a></li>
     <!--  <li>   <a href="#tab_2-2" data-toggle="tab">New Disciples</a></li> -->

      <li><a href="#tab_3-2" data-toggle="tab">Camp</a></li>
      <li><a href="#tab_4-2" data-toggle="tab">300 Disciples</a></li>
    </ul>

<div class="tab-content">
<div class="tab-pane active" id="tab_1-1">
<div class="box box-primary">
<div class="box-header">
        <!-- BREADCRUMB -->                  
        <div class="col-xs-4">
          <div class="breadcrumb">
            <p>A > B</p>

          </div>
        </div>
 
                                <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">总人数</a></li>
              <li><a href="#tab_2" data-toggle="tab">地教会</a></li>
              <li><a href="#tab_3" data-toggle="tab">专门别</a></li>
              <li><a href="#tab_2" data-toggle="tab">地教会</a></li>
              <li><a href="#tab_3" data-toggle="tab">大学</a></li>
              <li><a href="#tab_3" data-toggle="tab">青少年</a></li>
              <li><a href="#tab_2" data-toggle="tab">主日学</a></li>
              <li><a href="#tab_3" data-toggle="tab">幼儿园</a></li>
              
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
                  <input type="text" class="form-control pull-right" id="reservation">
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
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
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
               <canvas id="cvs" width="1200" height="400"></canvas>

              </div> <!-- The graph ends here -->
              </div> <!-- End of tab_1 -->

              <div class="tab-pane" id="tab_2">
                The languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
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
              </div>
              <!-- /.tab-pane -->
</div><!-- /.tab-content --> 

</div><!-- nav-tabs-custom -->
  <script>
                      window.onload = function ()
                      {
                       
                          var bar = new RGraph.Bar({
                              id: 'cvs',
                              data: [[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[1,4,6],[1,6,8]],
                              options: {
                                title:"CVS",
                                  backgroundGridVlines: false,
                                  backgroundGridBorder: false,
                                  noyaxis: true,
                                  labels:['Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                                  colors: [
                                  '#DD4B39', 
                                  '#00A65A',
                                   '#F39C12'
                                   ],
                                  hmargin: 15,
                                  strokestyle: 'white',
                                  linewidth: 1,
                                  shadowColor: '#ccc',
                                  shadowOffsetx: 0,
                                  shadowOffsety: 0,
                                  shadowBlur: 10,
                                  scaleZerostart: true,
                                  textAccessible: true
                              }
                          }) .draw();
                          

                        var bar1 = new RGraph.Bar({
                              id: 'cvs1',
                              data: [[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[1,4,6],[1,6,8]],
                              options: {
                                title:"CVS1",
                                  backgroundGridVlines: false,
                                  backgroundGridBorder: false,
                                  noyaxis: true,
                                  labels:['Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                                  colors: [
                                  '#DD4B39', 
                                  '#00A65A',
                                   '#F39C12'
                                   ],
                                  hmargin: 15,
                                  strokestyle: 'white',
                                  linewidth: 1,
                                  shadowColor: '#ccc',
                                  shadowOffsetx: 0,
                                  shadowOffsety: 0,
                                  shadowBlur: 10,
                                  scaleZerostart: true,
                                  textAccessible: true
                              }
                          }) .draw()
   };
 </script>

</div>
</div><!--box-primary-->
 </div><!-- /.tab-pane 1_1 --> 



            <div class="tab-pane" id="tab_2-2">
                        <!-- BAR CHART -->
            <div class="box-header with-border">
              <h3 class="box-title">New Disciples</h3>
            </div>
                The European  are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                <div class="row">
                <canvas id="cvs1" width="1200" height="400">[nO cANVAS sUPPORT]</canvas>

                </div>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.

              </div> 


 

            </div><!-- /.tab-content -->           
          </div>
          <!-- nav-tabs-custom -->
        </div>
     </div>


                

