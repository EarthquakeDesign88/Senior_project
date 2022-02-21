
<?php 
  include_once('php/connect.php');

  $sql = "SELECT id_form, area_floor.floor, area.areaname AS area, topic, status.status_detail AS 
  status 
  FROM form
  LEFT JOIN area_floor ON form.id_areafloor = area_floor.id_areafloor
  JOIN area ON area_floor.id_area = area.id_area
  JOIN status ON form.id_statusform = status.id_status
  WHERE floor =  '1'
  AND status.status_detail !=  'success'" ;
  $result = $conn->query($sql);

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
    
    <title> Repair </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="page-title jarallax" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://www.rockwellautomation.com/resources/images/rockwellautomation/publication/repair-shutterstock_133644224--photograph_848w477h.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class = "display-5 font-weight-bold text-center " style="color: #000000; font-size: 6rem" >  1<sup>st</sup> Floor </h1>
                   
                </div>
            </div>
        </div>    
    </header>

    <!--Section Detail -->
    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 ">  1<sup>st</sup> Floor Plan </h1>
        </div>
      </div>
    

      <!--Section ShowDetail-->
    <section>
      <div class="row">
        <div class="col-md-12">
            <img src="assets/image/diagram/floor1.jpg "class="img-fluid p-1  " width="1300" height="200" alt="">
        </div>

      </div> 
    </section>

    <section class="container p-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> Report List </h1>
        </div>
      </div>
    </section>

   
    
    <section class = "pt-5 text-center " style=" height:400px; overflow: scroll;">
    <div class="card-body">
            <table id="dataTable" class="table  table-bordered table-striped">
                <thead class = "thead-dark">
                <tr class="text-center ">
                    <th> No. </th>
                    <th> Floor </th>
                    <th> Area </th>   
                    <th> Report Topic </th>                                 
                    <th> Status </th>

                </tr>
                </thead>
                <tbody>
                
                       
            <?php 
              $num = 0;
              while( $row = $result->fetch_assoc() ){
                $num++;  
            ?>
              <tr>
                <td> <?php echo $num; ?></td>
                <td> ชั้น <?php echo $row['floor']; ?></td>
                <td> <?php echo $row['area']; ?></td>
                <td> <?php echo $row['topic']; ?></td>
              
                   
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
                                                                                  
                </td>
              </tr>

              
            <?php } ?>
                </tbody>
               
            </table>
        </div>  
        </section>
  
      
     
      
      <div class="row pt-5">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class=""> <B> Report Here </B> </h5> 
              <form method = "post" action ="php/form.php" enctype = "multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name"> Name </label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="ชื่อของคุณ">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phone"> Tel </label>
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์ของคุณ">
                  </div>



                  <div class="form-group col-md-4">
                  <label for="floor"> Floor </label>
                    <input  readonly type="text " id="floor" name="floor" class="form-control" value = "1">
                  
                  </div>

                
                  <div class="row form-group">
                  <div class="col col-md-4">
                    <label  for="area "> Room/Area </label> <br>
                    </div>
                    <div class="col-12 col-md-9">
                    
                    <select  name="area"  id="area"  class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">


                    <?php
                      $list = mysqli_query($conn,"SELECT area_floor.id_areafloor , area.areaname AS area 
                      FROM area_floor 
                      JOIN area ON area_floor.id_area = area.id_area 
                      WHERE Floor = '1'");

                      while ($row = mysqli_fetch_assoc($list)) {
                      ?>
                      <option value="<?php echo $row['area']; ?>"><?php echo $row['area']; ?></option>
                      
                      <?php } ?>
                       
                     
              
                    </select>
                 </div>
                 </div>

                      

                <div class="col-md-3">
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1"> Upload file image </label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                  </div>

                  <div class="form-group col-12">
                    <label for="topic"> Topic </label>
                    <input type="text" id="topic" name="topic" class="form-control" required placeholder="หัวข้อปัญหาที่ต้องการแจ้ง">
                  </div>

                  <div class="form-group col-12">
                    <label for="detail"> Detail </label>
                    <textarea id="detail" name="detail" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                  </div>
                  <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto"> Submit </button>
                  
                </div>
              </form>

            </div>
          </div>
          
        </div>
      </div>
    </section>


    
    <!--Section Footer-->
      <?php include_once('include/footer.php')?>
       
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type = "text/javascript" src="js/jquery.js"></script>
    <script type = "text/javascript" src="assets/js/jfuntion.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

</body>
</html>