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

    
    <title> Contact </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="page-title jarallax" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://www.minervatel.com/images/bg-cc3.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class = "display-5 font-weight-bold text-center" style="color: #000000; font-size: 3rem;" > Contact </h1>
                    <p class = "lead text-center" style="color: #000000;">  Faculty Of Science Burapha University </p>
                </div>
            </div>
        </div>    
    </header>

    <!--Section Detail Contact-->
    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> Support </h1>
        </div>

        <div class="col-sm-4 py-3 ">
          <div class="card h-100 text-center">
            <i class="fa fa-address-card-o fa-5x text-danger" aria-hidden="true"></i>
            <div class="card-body">
              <h3 class="title" style="color: rgba(19, 93, 255, 0.945)" > Address </h3>
              <p class="card-text"> 169 Longhard Bangsaen Rd., Saensook, Muang, Chon Buri 20131, Thailand </p>
            </div>
          </div> 
        </div>
        
        <div class="col-sm-4 py-3">
          <div class="card h-100 text-center">
            <i class="fa fa-phone-square fa-5x text-warning" aria-hidden="true"></i>
            <div class="card-body">
              <h3 class = "title" style="color: rgba(19, 93, 255, 0.945)" > Tel </h3>
              <p class="card-text"> Tel. (+66)38-103-061, (+66)38-103-096 <br>
                Fax. (+66)38-393- 245 </p>
            </div>
          </div> 
        </div>
        
        <div class="col-sm-4 py-3">
          <div class="card h-100 text-center">
            <i class="fa fa-envelope-o fa-5x text-success" aria-hidden="true"></i>
            <div class="card-body">
              <h3 class = "title" style="color: rgba(19, 93, 255, 0.945)" > Email </h3>
              <p class="card-text"> informatics@buu.ac.th </p>
            </div>
          </div> 
        </div>


      </div>

     
    </section>


    
    <!--Section Footer-->
      <?php include_once('include/footer.php')?>
       
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>

</body>
</html>