<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Task management</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/fileupload/bootstrap-fileupload.css">
 
  <!-- Gallery -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/magnific/magnific-popup.css">


</head>

<body>

  

  <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="dropdown ">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-desktop"></i>
            Tasks
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">   
            <li><a href="<?php echo base_url();?>user/addtask"><i class="fa fa-user nav-icon"></i> Add Task</a></li>
            <li><a href="<?php echo base_url();?>user/tasklist"><i class="fa fa-bars nav-icon"></i>Task List</a></li>
            
                 
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-align-left"></i> 
          Users Element
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
              
             <li>
              <a href="<?php echo base_url();?>user/userlist">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Users List
              </a>
            </li>

          </ul>
        </li>

       

        <li class="dropdown ">
          <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-external-link"></i>
            Settings
            <span class="caret"></span>
          </a>
           <ul class="dropdown-menu">
              
             <li>
              <a href="<?php echo base_url();?>user/logout">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Logout
              </a>
            </li>

          </ul>
          
        </li>

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->

