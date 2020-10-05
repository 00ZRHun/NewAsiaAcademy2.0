<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Asia Academy</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>as/modalimage.css">
    <link href="<?= site_url(); ?>as/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= site_url(); ?>as/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= site_url(); ?>as/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= site_url(); ?>as/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?= site_url(); ?>as/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= site_url(); ?>as/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= site_url(); ?>as/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= site_url(); ?>as/build/css/custom.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>as/mycss.css" rel="stylesheet">

    <style>
    
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="position: fixed; overflow-y: hide">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">New Asia Academy</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= site_url(); ?>images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br><br><br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Course <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= site_url(); ?>admin/professional_course">Professional Certificate / Diploma</a></li>
                      
                      <!-- <li><a href="<?= site_url(); ?>Admin/Short_Course/List">Workshop/Short Course</a></li> -->
                      <li><a href="<?= site_url(); ?>admin/short_course">Workshop/Short Course</a></li>
                    <li><a href="<?= site_url(); ?>admin/limited_course">Limited Course</a></li>
                    </ul>
                  </li> 
                  <li>
                    <a><i class="fa fa-cog"> </i>Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">activity log</a></li>                 
                    </ul>
                  </li>
                   <li>
                    <a><i class="fa fa-envelope"></i> Message </span></a>
                  </li>
                   <li>
                    <a href="<?= site_url(); ?>admin/Login/logout"><i class="fa fa-power-off"></i>Logout</span></a>

                  </li>         
                </ul>
              </div>
     

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
               
            </div>
          </div>