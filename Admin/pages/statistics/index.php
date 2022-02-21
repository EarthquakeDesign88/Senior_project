<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  include_once('../authen.php');
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'success'
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  $countsuc = $row['count'];
  if($row['count'] != 0){
    $countsuc = $row['count'];
  }
  else{
    $countsuc = 0;
  }

?>
<?php 
  include_once('../authen.php');
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'pending'
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  $countpend = $row['count'];
  if($row['count'] != 0){
    $countpend = $row['count'];
  }
  else{
    $countpend = 0;
  }
?>
<?php 
  include_once('../authen.php');
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'in progress'
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  $countin = $row['count'];
  if($row['count'] != 0){
    $countin = $row['count'];
  }
  else{
    $countin = 0;
  }
?>
<!-- คารางแสดงข้างล่าง -->
<?php 
  include_once('php/connect.php');
    $sql ="SELECT status.status_detail, form.id_areafloor, topic, area_floor.floor, area.areaname
    FROM form
    JOIN status ON form.id_statusform = status.id_status
    JOIN area_floor ON area_floor.id_areafloor = form.id_areafloor
    JOIN area ON area.id_area = area_floor.id_area ";
  $result = $conn->query($sql);
  // $countsuc = $row['count'];
  // if($countsuc = '0'){
  //   $countsuc = '0';
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Statistics </title>
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
            <h1> All Statistics Report </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Statistics </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
   
    <section class="content">
    
  

      

<!-- 3 -->
<!DOCTYPE HTML>
      <html>
      <head>  
      <script>
      window.onload = function () {
        CanvasJS.addColorSet("greenShades",
                [//colorSet Array
                "#dc3545",
                "#ffc107",
                "#28a745"                
                ]);

      var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      colorSet: "greenShades",
      theme: "light2", // "light1", "light2", "dark1", "dark2"
      title:{
        text: "Statistics Report"
      },
      axisY: {
        title: "Count Report"
      },

      data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "All Report",
        dataPoints: [  
          { y: <?php echo $countpend ?>, label: "pending" },
          { y: <?php echo $countin ?>,  label: "in progress" },    
          { y: <?php echo $countsuc ?>,  label: "success" }
          
        ]
      }]
      });
      chart.render();

      }
      </script>
      </head>
      <body>
      <div id="chartContainer" class ="m-3" style="height: 500px; width: 94%;"></div>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </body>
      </html>


      <section class="content" >
 <?php if($result != null) { ?>   
    <!-- Default box -->
    <div class="card m-5" style=" height:400px; overflow: scroll;">
      <div class="card-header">
        <h3 class="card-title">  Detail </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
            <table id="dataTable" class="table  table-bordered table-striped">
                <thead class = "thead-dark">
                <tr class="text-center ">
                    <th> No. </th>
                    <th> Floor </th>
                    <th> Area </th>   
                    <th> Topic </th>                                 
                    <th> Status </th>

                </tr>
                </thead>
                <tbody>
                
                       
            <?php 
              $num = 0;
              while( $row2 = $result->fetch_assoc() ){
                $num++;  
            ?>
              <tr>
                <td> <?php echo $num; ?></td>
                <td> ชั้น <?php echo $row2['floor']; ?></td>
                <td> <?php echo $row2['areaname']; ?></td>
                <td> <?php echo $row2['topic']; ?></td>
              
                   
                <?php
                $state;
                if ($row2['status_detail'] == 'success') {
                    $state = "success";
                } else if ($row2['status_detail'] == 'in progress'){
                    $state = "warning";
                } else {                              
                    $state = "danger";
                }
                ?>

                
                <td><span id="status" class="badge p-2 badge-<?php  echo $state; ?>"> <?php  echo $row2['status_detail']; ?> </span></td>
                                                                                  
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

  <?php } ?>

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
