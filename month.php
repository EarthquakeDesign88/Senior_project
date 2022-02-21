<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  include_once('php/connect.php');

  if (isset($_POST['submit'])) {
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count, YEAR( datetime_submit ) AS YEAR
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'success'
  AND YEAR( datetime_submit ) =".$_POST['YEAR']."
  AND MONTH( datetime_submit ) =".$_POST['month']."
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
<?php 
  include_once('php/connect.php');

  if (isset($_POST['submit'])) {
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count, YEAR( datetime_submit ) AS YEAR
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'pending'
  AND YEAR( datetime_submit ) =".$_POST['YEAR']."
  AND MONTH( datetime_submit ) =".$_POST['month']."
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  // $countpend = $row['count'];
  // if($countpend = '0'){
  //   $countpend = '0';
  // }

  if($row['count'] != 0){
    $countpend = $row['count'];
  }
  else{
    $countpend = 0;
  }
  }
?>
<?php 
  include_once('php/connect.php');
  
  if (isset($_POST['submit'])) {
  $list = mysqli_query($conn,"SELECT status.status_detail, COUNT( id_statusform ) AS count, YEAR( datetime_submit ) AS YEAR
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  where status_detail = 'in progress'
  AND YEAR( datetime_submit ) =".$_POST['YEAR']."
  AND MONTH( datetime_submit ) =".$_POST['month']."
  GROUP BY status.status_detail");
  $row = mysqli_fetch_assoc($list) ;

  // $countin = $row['count'];
  // if($countin = '0'){
  //   $countin = '0';
  // }
  if($row['count'] != 0){
    $countin = $row['count'];
  }
  else{
    $countin = 0;
  }
  }
  
?>

<!-- คารางแสดงข้างล่าง -->
<?php 
  include_once('php/connect.php');

  if (isset($_POST['submit'])) {
    $sql ="SELECT status.status_detail, form.id_areafloor, topic, area_floor.floor, area.areaname
  FROM form
  JOIN status ON form.id_statusform = status.id_status
  JOIN area_floor ON area_floor.id_areafloor = form.id_areafloor
  JOIN area ON area.id_area = area_floor.id_area
  AND YEAR( datetime_submit ) =".$_POST['YEAR']."
  AND MONTH( datetime_submit ) =".$_POST['month']."";
  $result = $conn->query($sql);
  // $countsuc = $row['count'];
  // if($countsuc = '0'){
  //   $countsuc = '0';
  }
  
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
    
    
    <title> Month </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="page-title jarallax " data-jarallax ='{"speed": 0.6}' style="background-image: url('assets/image/chartbackM.jpg');">

    </header>

    <!--Section Detail Contact-->
    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> Statistics Of Month </h1>
        </div>
        <form action="" method="post">
    <div class="row pl-5">
      <div class="form-group">
                  <div class="col col-md-12">
                    <label  for="YEAR "> Select Year </label> <br>
                    </div>
                    <div class="col-md-6">
                    
                    <select  name="YEAR"  id="YEAR"  class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">


                    <?php
                      $list = mysqli_query($conn,"SELECT YEAR( datetime_submit ) AS YEAR
                      FROM form
                      GROUP BY YEAR");

                      while ($row = mysqli_fetch_assoc($list)) {
                      ?>
                      <option value="<?php echo $row['YEAR']; ?>"><?php echo $row['YEAR']; ?></option>
                      
                      <?php } ?>                       
                    </select>

                 </div>

                 <div class="col col-md-12">
                    <label  for="month"> Select Month </label> <br>
                    </div>
                    <div class="col-md-6">
                    
                    <select  name="month"  id="month"  class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">
                      <option value="1"> January  </option> 
                      <option value="2"> February  </option> 
                      <option value="3"> March  </option> 
                      <option value="4"> April </option> 
                      <option value="5"> May  </option> 
                      <option value="6"> June </option> 
                      <option value="7"> July  </option> 
                      <option value="8"> August </option> 
                      <option value="9"> September  </option> 
                      <option value="10"> October  </option> 
                      <option value="11"> November  </option> 
                      <option value="12"> December </option> 
                 
                    </select>

                 </div>

                 <div class = "col-md-6 pt-5 pl-0">
                    <button type="submit" name="submit" class="btn btn-primary " > Submit </button>
                 </div>    
       
    </section>

   


    
    
   
    <section class="content m-4">
    
      <!-- Default box -->
      <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title"> All statistics report </h3>
      </div> -->
          
    
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

      
      <section class="content">

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