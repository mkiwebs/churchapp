<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAsset::register($this);
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- Messages: style can be found in dropdown.less-->


          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->

              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
        <li class="">
               
            <?= Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout',
                ['class' => 'btn bg-orange btn-flat']
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
          <a href="pages/widgets.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Statistics</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Regional</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Busines </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>RT</a></li>
          </ul>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-plus"></i> <span>Church Info</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>General</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Deacons</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Community</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Training</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Language</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>Modules</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Components</a></li>
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
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Deacons</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Community</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> New Disciples</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Experts</a></li>
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
      <p class="lead">
        Dashboard
        <small><?php echo date("Y/ m /j");?></small>
      </p>
         <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
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
</html>
<?php $this->endPage() ?>
