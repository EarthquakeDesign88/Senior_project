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
    <link rel="apple-touch-icon" sizes="180x180" href="Admin/dist/img/favicons/IF.png">
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
    
    
    <title> The Repair Reporting System Of The Informatics Building </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Carousel
    3.Section Blog
    4.Section Footer -->
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
   
    <!--Section Carousel-->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class = "carousel-img" style = "background-image: url('http://www.architects110.com/wp-content/uploads/2017/04/5426_View-3.jpg')">
              <div class ="carousel-caption">
                <!-- <h1 class = "display-5 font-weight-bold " > The Repair Reporting System of the Informatics Building  </h1> -->
                <!-- <p class = "lead"> ระบบรายงานการซ่อมแซมของอาคารสารสนเทศ </p> -->
              </div>
                <div class = "backsceen"> </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class = "carousel-img" style = "background-image: url('http://www.architects110.com/wp-content/uploads/2017/04/5426_View-2-1.jpg')">
              <div class ="carousel-caption">
                <!-- <h1  class = "display-5 font-weight-bold"> The Repair Reporting System of the Informatics Building </h1> -->
                <!-- <p  class = "lead"> ระบบรายงานการซ่อมแซมของอาคารสารสนเทศ </p> -->
              </div>
                <div class = "backsceen"> </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class = "carousel-img" style = "background-image: url('https://images.unsplash.com/photo-1498409785966-ab341407de6e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1060&q=80')">
              <div class ="carousel-caption">
                <!-- <h1  class = "display-5 font-weight-bold"> The Repair Reporting System of the Informatics Building </h1> -->
                <!-- <p  class = "lead"> ระบบรายงานการซ่อมแซมของอาคารสารสนเทศ </p> -->
              </div>  
                <div class = "backsceen"> </div>
            </div>           
          </div>
        </div>
    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </section>

      <!--Section Jumbotron-->
      <section class="jumbotron jumbotron-fluid text-center">
        <div class = "container">
          <h1 class = "border-short-bottom"> The Repair Reporting System Of The Informatics Building </h1>
          <p class = "lead"   > Faculty Of Informatics </p>
        </div>
      </section>
      
      <!--Section Blog-->
      <section class = "container">
        <h1 class = "border-short-bottom text-center" style="color:blue "> Report Here </h1>
        <div class="row">
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <a href="pd1.php" class="warper">  
                  <img src="assets/image/Floor/1.JPG" class="card-img-top h-100 ">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 1<sup>st</sup> Floor </h5>                
                </div>

                <div class="card-footer">
                  <a href="Report3.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div> 
                      
                         
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="pd1.php" class="warper">
                  <img src="assets/image/Floor/2.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 2<sup>nd</sup> Floor </h5>
                </div>

                <div class="card-footer">
                  <a href="Report3.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div> 
              
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report3.php" class="warper">
                  <img src="assets/image/Floor/3.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 3<sup>rd</sup> Floor </h5>
                </div>

                <div class="card-footer">
                  <a href="Report3.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div> 
              </div>                                    
            </section>

           <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 "> 
                <a href="Report4.php" class="warper">
                  <img src="assets/image/Floor/4.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 4<sup>th</sup> Floor </h5>
                </div>

                <div class="card-footer">
                  <a href="Report4.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>          
            </section>   
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report5.php" class="warper">
                  <img src="assets/image/Floor/5.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"> 5<sup>th</sup> Floor </h5>
                </div>

                <div class="card-footer">
                   <a href="Report5.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>    
                </div>                   
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <a href="Report6.php" class="warper">
                  <img src="assets/image/Floor/6.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 6<sup>th</sup> Floor </h5>
                </div>

                <div class="card-footer">
                  <a href="Report6.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report7.php" class="warper">
                  <img src="assets/image/Floor/7.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 7<sup>th</sup> Floor </h5>
                </div>

                <div class="card-footer">
                  <a href="Report7.php" class="btn btn-primary bg-danger btn-block "> Go To Report </a>   
                </div>
              </div>                                     
            </section>
            
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report8.php" class="warper">
                  <img src="assets/image/Floor/8.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 8<sup>th</sup> Floor </h5>   
                </div>

                <div class="card-footer"> 
                  <a href="Report8.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report9.php" class="warper">
                  <img src="assets/image/Floor/9.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 9<sup>th</sup> Floor </h5>     
                </div>

                <div class="card-footer"> 
                  <a href="Report9.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report10.php" class="warper">
                  <img src="assets/image/Floor/10.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 10<sup>th</sup> Floor </h5>    
                </div>

                <div class="card-footer"> 
                  <a href="Report10.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report11.php" class="warper">
                  <img src="assets/image/Floor/11.JPG" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> 11<sup>th</sup> Floor </h5>  
                </div>

                <div class="card-footer"> 
                  <a href="Report11.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>
          </div> 
      </section> 

      
      
      <!--Section Footer-->
      <?php include_once('include/footer.php')?>
       
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>
</html>