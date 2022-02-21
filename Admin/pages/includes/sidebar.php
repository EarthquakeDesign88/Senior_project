<?php 
$uri = $_SERVER['REQUEST_URI'];
$array = explode('/', $uri);
$key = array_search("pages", $array);
$page = $array[$key + 1];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Report </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/IF.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/IF.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/IF.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">



<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <!-- Show Time -->
          Last login: <?php echo date_format(new DateTime($_SESSION['last_login']),"j F Y H:i:s")?> 
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block"> Admin Management </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/IF.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['first_name'].' '. $_SESSION['last_name']?> </a>
        </div>
      </div>
      

      <!-- Report -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="../report">
            <i class="far fa-envelope"></i> <span> Report </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../report_pending"><i class="fa fa-circle-o"></i> pending </a></li>
            <li><a href="../report_inprogress"><i class="fa fa-circle-o"></i> in progress </a></li>
            <li><a href="../report_success"><i class="fa fa-circle-o"></i> success </a></li>
          </ul>
        </li> 
              
    
      <!-- Statistics -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

       
        <li class="treeview">
          <a href="../statistics">
            <i class="fas fa-chart-bar"></i> <span> Statistics </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../statistics_day"><i class="fa fa-circle-o"></i> Day </a></li>
            <li><a href="../statistics_month"><i class="fa fa-circle-o"></i> Month </a></li>
            <li><a href="../statistics_year"><i class="fa fa-circle-o"></i> Year </a></li>
            <li><a href="../administrator"><i class="fa fa-circle-o"></i> Administrator </a></li>
          </ul>
        </li>       
        </ul>
        </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
          <!-- Check SuperAdmin -->
          <?php if($_SESSION['id_status']== 'superadmin'){ ?>
          <li class="nav-item">
            <a href="../admin" class="nav-link <?php echo $page == 'admin' ? 'active': '' ?>">
              <i class="fas fa-users-cog"></i>
              <p> Admin Management </p>
            </a>
          </li>
<?php }?>


        
        

          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
