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
    
    <title> Informatics Repair center </title>


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
                <h1 class = "display-5 font-weight-bold"> Informatics Repair Center </h1>
                <p class = "lead"> ระบบแจ้งอุปกรณ์เสียภายในคณะวิทยาการสารสนเทศ </p>
              </div>
                <div class = "backsceen"> </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class = "carousel-img" style = "background-image: url('http://www.architects110.com/wp-content/uploads/2017/04/5426_View-2-1.jpg')">
              <div class ="carousel-caption">
                <h1  class = "display-5 font-weight-bold"> Informatics Repair Center </h1>
                <p  class = "lead"> ระบบแจ้งอุปกรณ์เสียภายในคณะวิทยาการสารสนเทศ </p>
              </div>
                <div class = "backsceen"> </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class = "carousel-img" style = "background-image: url('https://images.unsplash.com/photo-1498409785966-ab341407de6e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1060&q=80')">
              <div class ="carousel-caption">
                <h1  class = "display-5 font-weight-bold"> Informatics Repair Center </h1>
                <p  class = "lead"> ระบบแจ้งอุปกรณ์เสียภายในคณะวิทยาการสารสนเทศ </p>
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
          <h1 class = "border-short-bottom"> ระบบแจ้งอุปกรณ์,สิ่งก่อสร้างชำรุด </h1>
          <p class = "lead" > คณะวิทยาการสารสนเทศ  </p>
        </div>
      </section>
      
      <!--Section Blog-->
      <section class = "container">
        <h1 class = "border-short-bottom text-center" style="color:blue "> แจ้งเสียที่นี่ </h1>
        <div class="row">
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <a href="Report1.php" class="warper">  
                  <img src="assets/image/Floor/F1.jpg" class="card-img-top h-100 ">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor1 </h5>
                  <p class="card-text"> 1 rooms </p>
                </div>
                      
                <div class="card-footer">
                  <a href="Report1.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>                    
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report2.php" class="warper">
                  <img src="assets/image/Floor/F2.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor2 </h5>
                  <p class="card-text"> 11 rooms </p>
                </div>

                <div class="card-footer">
                  <a href="Report2.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report3.php" class="warper">
                  <img src="assets/image/Floor/F3.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor3 </h5>
                  <p class="card-text"> 5 rooms </p>
                </div>

                <div class="card-footer">
                  <a href="Report3.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div> 
              </div>                                    
            </section>

           <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 "> 
                <a href="Report4.php" class="warper">
                  <img src="assets/image/Floor/F4.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor4 </h5>
                  <p class="card-text"> 5 rooms </p>
                </div>

                <div class="card-footer">
                  <a href="Report4.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>          
            </section>   
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report5.php" class="warper">
                  <img src="assets/image/Floor/F5.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"> Floor5 </h5>
                    <p class="card-text"> 6 rooms </p>
                </div>

                <div class="card-footer">
                    <a href="Report5.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>                   
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <a href="Report6.php" class="warper">
                  <img src="assets/image/Floor/F6.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor6 </h5>
                  <p class="card-text"> 5 rooms </p>
                </div>

                <div class="card-footer">
                  <a href="Report6.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 ">
                <a href="Report7.php" class="warper">
                  <img src="assets/image/Floor/F7.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor7 </h5>
                  <p class="card-text"> 5 rooms </p>
                </div>

                <div class="card-footer">
                  <a href="Report7.php" class="btn btn-primary bg-danger btn-block "> Go To Report </a>   
                </div>
              </div>                                     
            </section>
            
            <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report8.php" class="warper">
                  <img src="assets/image/Floor/F8.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor8 </h5>
                <p class="card-text"> 8 rooms </p>      
                </div>

                <div class="card-footer"> 
                  <a href="Report8.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report9.php" class="warper">
                  <img src="assets/image/Floor/F9.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor9 </h5>
                <p class="card-text"> 44 rooms </p>      
                </div>

                <div class="card-footer"> 
                  <a href="Report9.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report10.php" class="warper">
                  <img src="assets/image/Floor/F10.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor10 </h5>
                <p class="card-text"> 7 rooms </p>      
                </div>

                <div class="card-footer"> 
                  <a href="Report10.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>

          <section class = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4 ">
              <div class="card h-100"> 
                <a href="Report11.php" class="warper">
                  <img src="assets/image/Floor/F11.jpg" class="card-img-top h-100" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> Floor11 </h5>
                <p class="card-text"> 2 rooms </p>      
                </div>

                <div class="card-footer"> 
                  <a href="Report11.php" class="btn btn-primary bg-danger btn-block"> Go To Report </a>   
                </div>
              </div>                                     
            </section>
          </div> 
      </section> 

      
      
      <!--Section Footer-->
      <footer class="decorate-footer mt-5 p-5 text-center text-md-left">
          <div class="row">
              <div class="col-md-4">
                  <a class="navbar-brand" href="#">
                  <img src="assets/image/logo.png" width="35" height="35" alt=""> Informatics Repair center
                  </a> 
                  <p>
                      <i class="fa fa-phone-square"></i> :Tel 038 103 060 <br>
                      <i class="fa fa-envelope-o"></i> :Email informatics@buu.ac.th <br>
                  </p> 
                      <a href="https://www.facebook.com/InformaticsBuu/" target="_blank"> 
                          <i class="fa fa-facebook-square fa-2x"></i>
                      </a>
              
                      <a href="https://www.youtube.com/channel/UCI0YkQlBZS5vqDtgIW3Mo9w" target="_blank">
                          <i class="fa fa-youtube fa-2x"></i>
                      </a>
      
                      <a href="https://www.informatics.buu.ac.th/2018/" targer="_blank">
                          <i class="fa fa-university fa-2x"></i>
                      </a>
      
                      <a href="">
                          <i class="fa fa-line"></i>
                      </a>         
              </div>       
                  <div class="col-md-3">
                      <h4> Menu </h4>
                      <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="1-Homepage.php"> Home <span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item active">
                          <a class="nav-link" href="About.php"> About </a>
                      </li>
      
                      <li class="nav-item">
                          <a class="nav-link" href="Blog.php"> Blog </a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="Repair.php"> Repair </a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="Help.php"> Help </a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="Contact.php"> Contact </a>
                      </li>       
                      </ul>        
                  </div>
                  <div class="col-md-5"> 
                      <h4> Maps </h4>
                      <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=informatics%20burapha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <style>
                        .mapouter{text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}
                        </style>
                  </div>
              </div>
          </footer>
      
          <footer class="footer">
          <span> COPYRIGHT&copy; 2019 <a href="https://www.informatics.buu.ac.th/2018/"target="_blank"> InformaticsBuu </a>
              ALL Right Reserved
          </span>      
          </footer>
       
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>
</html>