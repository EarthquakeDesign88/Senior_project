<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php 
  include_once('../authen.php');

  $sql = "SELECT username_admin,first_name,last_name,phone,line_id,status_admin.admin_detail 
  AS status 
  FROM admin 
  JOIN status_admin ON admin.id_status = status_admin.id_status";
  $result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/IF.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/IF.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/IF.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/IF.png">
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
            <h1>Admin Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">           
              <li class="breadcrumb-item active">Admin Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Admin List</h3>
          <a href="form-create.php" class="btn btn-secondary float-right ">Add Admin +</a href="">
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
          <table id="dataTable" class="table  table-bordered table-striped ">
            <thead class = "thead-dark">
            <tr class="text-center">
              <th> No. </th>
              <th> Username </th>
              <th> FirstName </th>
              <th> LastName </th>
              <th> Phone </th>
              <th> Line id </th>
              <th> Permission </th>
              <th> Edit </th>
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
                <td> <?php echo $row['username_admin']; ?></td>
                <td> <?php echo $row['first_name']; ?></td>
                <td> <?php echo $row['last_name']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['line_id']; ?></td>
                <td><span class="badge p-2 badge-secondary"> <?php echo $row['status'];?> </span></td>
                
                <?php if($username_admin != 1) { ?>   
                <td>
                  <a href="form-edit.php?username_admin=<?php echo $row['username_admin']; ?>" class="btn btn-sm btn-primary text-white">
                    <i class="fas fa-edit"></i> edit
                  </a> 
                </td>
                <?php } ?>
             
              </tr>
            <?php } ?>
            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

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
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  function deleteItem (id) { 
    if( confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?') == true){
      window.location=`delete.php?username=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html>
