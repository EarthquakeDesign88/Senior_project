<?php 
  include_once('../authen.php');
  
  $sql = "SELECT id_form,area_floor.floor ,area.areaname AS area,topic, datetime_submit,status.status_detail AS status, update_status ,update_admin
  FROM form 
  LEFT JOIN area_floor ON form.ID_areafloor = area_floor.id_areafloor JOIN area ON area_floor.id_area = area.id_area 
  JOIN status ON form.id_statusform = status.id_status 
  WHERE Status_Detail = 'in progress'";
  $result = $conn->query($sql);



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> in progress </title>
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
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Report in progress </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="../report"> Report  </a></li>
              <li class="breadcrumb-item active"> in progress </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
  
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">

            <!-- DIRECT CHAT -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Report </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped">
            <thead class = "thead-dark">
                <tr class="text-center">
                  <th> No. </th>
                  <th> Floor </th>
                  <th> Area </th>
                  <th> Topic </th>             
                  <th> Datetime </th>                  
                  <th> Status </th>
                  <th> Update status </th>
                  <th> Detail </th>
                </tr>
                </thead>
                <tbody>
                
               
                
                <?php 
              $num = 0;
              while( $row = $result->fetch_assoc() ){
                $num++;  
            ?>
              <tr class="text-center">
                <td> <?php echo $num; ?></td>
                <td> <?php echo $row['floor']; ?></td>
                <td> <?php echo $row['area']; ?></td>
                <td> <?php echo $row['topic']; ?></td>
                <td> <?php echo $row['datetime_submit']; ?></td>
                
                <?php
                $state;
                if ($row['status'] == 'success') {
                    $state = "success";
                } else if ($row['status'] == 'in progress'){
                    $state = "warning";
                } else {                              
                    $state = "danger";
                }
                ?>

                <td><span id="status" class="badge p-2 badge-<?php  echo $state; ?>"> <?php  echo $row['status']; ?> </span></td>
                   
                <td class ="text-primary"> <?php echo $row['update_status']; ?> <br> <B>
                <?php echo $row['update_admin']; ?></td>
                                                             
                <td>
                  <a href="edit-detail-in.php?id_form=<?php echo $row['id_form']; ?>" class="btn btn-sm btn-primary text-white">
                    <i class="fas fa-edit"></i> Detail
                  </a> 
                </td>
                                                                  
                    
              </tr>

              
            <?php } ?>
                </tbody>
               
            </table>
        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
