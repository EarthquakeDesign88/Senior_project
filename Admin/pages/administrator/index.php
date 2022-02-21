<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  include_once('../authen.php');

  if (isset($_POST['submit'])) {
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count, YEAR( datetime_submit ) AS YEAR
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'success'
  AND update_admin =  ".$_POST['admin']."
  AND YEAR( datetime_submit ) =".$_POST['YEAR']."
  AND MONTH( datetime_submit ) =".$_POST['month']."
  AND DAY( datetime_submit ) = ".$_POST['day']."
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  // $countsuc = $row['count'];
  // if($countsuc = '0'){
  //   $countsuc = '0';
  // }
  if($row['count'] != 0){
    $countsuc = $row['count'];
  }
  else{
    $countsuc = 0;
  }
  }
  

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Administrator </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicons -->
  <link rel="stylesheet" href="../../../assets/css/style.css">
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
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Administrator </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Administrator </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> Statistics </h1>
        </div>
       
    </section>

    <section class = "container">
      
        <div class="row">
            <section class = "col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
              <div class="card h-100">
                <a href="a_day.php" class="warper">  
                  <img src="../../../assets/image/chartD.jpg" class="card-img-top h-100 ">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Day </h2>                
                </div>
                      
                                  
              </div>                                     
            </section>

            <section class = "col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
              <div class="card h-100 ">
                <a href="a_month.php" class="warper">
                  <img src="../../../assets/image/chartM.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Month </h2>
                </div>

               
              </div>                                     
            </section>

            <section class = "col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
              <div class="card h-100 ">
                <a href="a_year.php" class="warper">
                  <img src="../../../assets/image/chartY.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Year </h2>
                </div>

               
              </div>                                    
            </section>

          
      </section> 

      </div>  




 

 <!-- footer -->
 <?php include_once('../includes/footer.php') ?>
  
  </div>
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  
  <script>
    $(function () {
      $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
      });
    });
   
   
  </script>
  
  
  
  </body>
  </html>
  