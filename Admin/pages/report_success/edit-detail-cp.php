<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  include_once('../authen.php');
  $id = $_GET['id_form'];
  $sql = "SELECT id_form,area_floor.floor ,area.areaname AS area,name,phone,image, datetime_submit,status.status_detail AS status, update_status ,detail,topic,update_admin
  FROM form 
  LEFT JOIN area_floor ON form.id_areafloor = area_floor.id_areafloor 
  JOIN area ON area_floor.id_area = area.id_area 
  JOIN status ON form.id_statusform = status.id_status
  WHERE `id_form` = '".$id."' ";
  $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> success detail  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
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
            <h1> Report success </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../report_success"> Report success </a></li>
              <li class="breadcrumb-item active"> Edit Detail </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title"> View Detail </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update-status.php" method="post">

        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead class = "thead-dark">
                <tr class="text-center">
                    <th> Floor </th>
                    <th> Area </th>
                    <th> Name</th>    
                    <th> Phone</th>          
                    <th> Datetime </th>                  
                    <th> Status </th>
                    <th> Update status </th>     
                </tr>
                </thead>
                <tbody>
                
                              
                <?php 
              $num = 0;
              while( $row = $result->fetch_assoc() ){
                $num++;  
            ?>
              <tr class="text-center">
                <td> <?php echo $row['floor']; ?></td>
                <td> <?php echo $row['area']; ?></td>
                <td> <?php echo $row['name']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
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
                                                          
                 </tr>
                
                 </tbody>
               
               </table>
           </div>
            
           <section>
            <div class="row text-center">
              <div class="col-sm-12">
                <i class="fa fa-bookmark fa-3x pb-5">  Topic <br> 
           
                </i>
              </div> 

            </div>               
           </section>

           <section>
            <div class="row  text-center">
              <div class="col-sm-12">             
                <div class="card border-primary">
                  <div class="card-body ">
                    <h3 class = "text"><?php echo $row['topic']; ?></h3>
                  </div>
                </div>
              </div> 

            </div>               
           </section>
           
           <section>
            <div class="row text-center">
              <div class="col-sm-12">
                <i class="fa fa-comment fa-3x pb-5">  Detail <br> 
           
                </i>
              </div> 

            </div>               
           </section>

           <section>
            <div class="row  text-center">
              <div class="col-sm-12">             
                <div class="card border-primary">
                  <div class="card-body ">
                    <h3 class = "text"><?php echo $row['detail']; ?></h3>
                  </div>
                </div>
              </div> 

            </div>               
           </section>
                                                    
           
              
           <section class = "container">
             
           <div class="row text-center">
              <div class="col-sm-12">
                <i class="fas fa-image fa-3x p-5">  Image <br> 
                 
                </i>  

              </div> 
            </div> 
                              
            <?php if($row['image'] != null) { ?>         
                <div style='text-align:center;'>
                  <img class="img-fluid d-block mx-auto pb-5 " src="../../../assets/image/image_upload/<?php echo $row['image'];?>" width="700px" alt="">  
                </div>                          
              </section>
  
              <?php } ?>

              <?php if($row['image'] == null) { ?> 
                <div class="row text-center">
              <div class="col-sm-12">
              <div style='text-align:center;'>
                  <img class="img-fluid d-block mx-auto pb-5 " src="../../../assets/image/image_upload/NoPicture.jpg" width="700px" alt="">  
                </div> 

              </div> 
              <?php } ?>
  
              
            <?php } ?>
               


    
          </div>

          <!-- ซ่อนค่า Input -->
          <input type ="hidden" name = "id" value="<?php echo $id;?>"> 

          <!-- <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div> -->
        </form>
      </div>    
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
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });
</script>

</body>
</html>
