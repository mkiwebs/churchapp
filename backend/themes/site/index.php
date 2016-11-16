<?php

/* @var $this yii\web\View */

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
        
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Workers</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">New Disciples</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">Camp</a></li>
              <li><a href="#tab_4-2" data-toggle="tab">300 Disciples</a></li>
            </ul>

            <div class="tab-content">
            <div class="tab-pane active" id="tab_1-1">

            <div class="box box-primary">
            <div class="box-header">
                    <!--  TITLE -->
                    <b>How to use:</b>
                    <!-- BREADCRUMB -->
                     <div class="breadcrumb">
                        <p>A > B</p>
                     </div>
              <h3 class="box-title">Total</h3>
            </div>
            <div class="box-body">

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

        <div class="col-xs-2 col-sm-2 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"></span>

            <div class="info-box-content">
              <span class="info-box-text">Sunday Service</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
                 <!-- /.col -->
        <div class="col-xs col-sm-2 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"></span>

            <div class="info-box-content">
              <span class="info-box-text">Midweek</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-xs col-sm-2 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"></span>

            <div class="info-box-content">
              <span class="info-box-text">New Disciples</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="row">
               <canvas id="cvs" width="1200" height="400"></canvas>

    <script>
        window.onload = function ()
        {
            var bar = new RGraph.Bar({
                id: 'cvs',
                data: [[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[1,4,6],[1,6,8]],
                options: {
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
            }).wave({frames:30})
        };
    </script>


        </div>

          </div></div>
   </div><!-- tab_1-1 -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                The European languages are members of the same family. Their separate existence is a myth.
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
               <canvas id="cvs" width="1200" height="400"></canvas>

    <script>
        window.onload = function ()
        {
            var bar = new RGraph.Bar({
                id: 'cvs',
                data: [[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[3,4,6],[2,5,3],[1,5,2],[1,4,6],[1,6,8],[1,4,6],[1,6,8]],
                options: {
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
            }).wave({frames:30})
        };
    </script>


        </div>
              </div>
               <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4-2">
                TAB 42 is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
     </div>
</pre>
<script src="RGraph/libraries/RGraph.common.core.js"></script>
<script src="RGraph/libraries/RGraph.bar.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
