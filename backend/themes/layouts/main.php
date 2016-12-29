<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

DashboardAsset::register($this);
$this->registerCss(" small {
    display: inline;
    font-size: 1em;
    text-align: center;
    text-shadow: 0 0 5px #00c6ff;
}
");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
      <header class="main-header">
    <!-- Logo -->


    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Rem</b>nant</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
              <p class="inline"><?php
            echo Html::a('中文', Url::current(['language' => 'zh-CN']),
              ['style' => 'padding-right:10px;color:white;'])." ";
            echo Html::a('English', Url::current(['language' => 'en-US']),
              ['style' => 'padding-right:10px;color:white;']);
            ?></p>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
        <li class="">
               
            <?= Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout',
                ['class' => 'inline btn bg-orange btn-flat']
            )
            . Html::endForm() ?>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php 
          if (!Yii::$app->user->isGuest) {
            echo Yii::$app->user->identity->username; 
         }?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
            <a href="index.php">
            <i class="fa fa-dashboard"></i>
            <span><?= Yii::t('backend', 'Dashboard')?> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span><?= Yii::t('backend', 'Statistics')?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><?= Html::a(Yii::t('backend', ' Local Church'), ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?>
               <li>
           <a href="#">
            <i class="fa fa-circle-o"></i>
            <span><?= Yii::t('backend', 'Church Data')?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
          <ul class="treeview-menu">
            <li><?= Html::a(Yii::t('backend', 'Sunday Service'), ['/service/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Midweek'), ['/midweek/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Deacons'), ['/site/workers'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' University'), ['/site/universitydata'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' New Disciples'), ['/site/newdiscipledata'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Camp'), ['/site/campdata'], ['class' => 'fa fa-circle-o']) ?></li>
          </ul>
          </li>



            </li>
            <li><?= Html::a(Yii::t('backend', ' University'), ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' RT Mission'), ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Business Mission'), ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
          </ul>
        </li>

        <li>
           <a href="#">
            <i class="fa fa-cogs"></i>
            <span><?= Yii::t('backend', 'Church Info')?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
          <ul class="treeview-menu">
            <li><?= Html::a(Yii::t('backend', ' General'), ['/church/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Officials'), ['/officials/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Deacons'), ['/deacons/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Community'), ['/community/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Training'), ['/training/index'], ['class' => 'fa fa-circle-o']) ?></li>
             <li><?= Html::a(Yii::t('backend', ' Property'), ['/property/index'], ['class' => 'fa fa-circle-o']) ?></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span><?= Yii::t('backend', 'Settings')?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?= Html::a(Yii::t('backend', ' Property'), ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' Modules', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' Components', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
                           <li>
           <a href="#">
            <i class="fa fa-circle-o"></i>
            <span><?= Yii::t('backend', 'Access Control')?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
          <ul class="treeview-menu">
            <li><?= Html::a(Yii::t('backend', 'User'), ['/admin/user'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Roles'), ['/admin/role'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Permission'), ['/admin/permission'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Menu'), ['/admin/menu'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Route'), ['/admin/route'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(Yii::t('backend', ' Admins'), ['/site/campdata'], ['class' => 'fa fa-circle-o']) ?></li>
          </ul>
          </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-users"></i>
            <span>Disciples </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?= Html::a(' Disciples', ['/disciple/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' Deacons', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' Community', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' New Disciples', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
            <li><?= Html::a(' Experts', ['/storekeeping/index'], ['class' => 'fa fa-circle-o']) ?></li>
          </ul>
        </li>

        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="clock  inline">
        Dashboard
             <small id="Date"></small>
             <small id="hours"> </small>
             <small id="point">: </small> 
             <small id="min"> </small>
             <small id="point">: </small>
             <small id="sec"> </small>
         <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            //'class'=>' inline',
        ]) ?></p>
        <?= Alert::widget() ?>
    </section>
    <section class="content">
      <?= $content ?>
    </section>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<?php $this->registerJsFile(
  'http://code.jquery.com/jquery-1.6.4.min.js',
  ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
  // Create a newDate() object and extract the seconds of the current time on the visitor's
  var seconds = new Date().getSeconds();
  // Add a leading zero to seconds value
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the minutes of the current time on the visitor's
  var minutes = new Date().getMinutes();
  // Add a leading zero to the minutes value
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the hours of the current time on the visitor's
  var hours = new Date().getHours();
  // Add a leading zero to the hours value
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000); 
});
</script>
</html>
<?php $this->endPage() ?>
