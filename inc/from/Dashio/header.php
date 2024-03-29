</!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>sabuj - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/img/favicon.png" rel="icon">
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) ?>/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) ?>/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo plugin_dir_url( __FILE__ ) ?>/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo plugin_dir_url( __FILE__ ) ?>/lib/chart-master/Chart.js"></script>
  <style type="text/css">
  	
#wpadminbar {
  visibility: hidden;
  height: 0;
}
#wpfooter {
  visibility: hidden;
}
#adminmenumain {
  display: none;
}
#wpcontent {
  margin: 0;
  padding: 0
}
.wp-toolbar {
	padding: 0 !important;
}
#wpbody-content {
	padding-bottom: 0px;
}
.col-sm-2.control-label {
  font-size: 17px;
}
  </style>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>University <span>Mangement</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
       
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="<?php echo admin_url(); ?>">Back Wordpress Desbord</a>
          </li>
          <li>
            <a class="logout" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="profile.html"></img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/ui-sam.jpg" class="/img-circle" width="80"></a>
          </p>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Student Tables</span>
              </a>
            <ul class="sub">
              <li class="active">
                <a href="<?php echo admin_url('admin.php?page=all-students') ?>">All Student</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li class="active">
                <a href="<?php echo admin_url('admin.php?page=add-student-information') ?>">Add Student</a>
              </li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>