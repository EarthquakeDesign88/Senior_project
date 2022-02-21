<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  include_once('php/connect.php');

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
  include_once('php/connect.php');

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
  include_once('php/connect.php');

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.embedgooglemap.net">
    <link rel="icon" type="image/png" sizes="32x32" href="Admin/dist/img/favicons/IF.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Admin/dist/img/favicons/IF.png">
 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
  <link rel="stylesheet" href="Admin/plugins/datatables/dataTables.bootstrap4.min.css">
    
    <title> Statistics </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="page-title jarallax" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://images.unsplash.com/photo-1535320903710-d993d3d77d29?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class = "display-5 font-weight-bold text-center" style="color: #000000; font-size: 4rem "> Statistics </h1>
                </div>
            </div>
        </div>    
    </header>

    <!--Section Detail Contact-->
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
                <a href="day.php" class="warper">  
                  <img src="assets/image/chartD.jpg" class="card-img-top h-100 ">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Day </h2>                
                </div>
                      
                                  
              </div>                                     
            </section>

            <section class = "col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
              <div class="card h-100 ">
                <a href="month.php" class="warper">
                  <img src="assets/image/chartM.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Month </h2>
                </div>

               
              </div>                                     
            </section>

            <section class = "col-12 col-sm-4 col-md-4 col-lg-4 mb-4">
              <div class="card h-100 ">
                <a href="year.php" class="warper">
                  <img src="assets/image/chartY.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h2 class="card-title text-center"> Year </h2>
                </div>

               
              </div>                                    
            </section>

          
      </section> 


    
    
   
    <section class="content m-4">
    
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" > All Statistics  Report </h3>
      </div>
          
    
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
        text: "Statistics Report "
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
      <div id="chartContainer" style="height: 400px; width: 100%;"></div>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </body>
      </html>
      </section>

      <section class="content " >
 <?php if($result != null) { ?>   
    <!-- Default box -->
    <div class="card m-5 " style=" height:400px; overflow: scroll;">
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

   
       

  
    


    
    <!--Section Footer-->
      <?php include_once('include/footer.php')?>
      <!-- jQuery -->
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="Admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Admin/dist/js/demo.js"></script>
       
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>

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
<!--Section Footer-->
<?php include_once('include/footer.php')?>
</body>
</html>