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
                    <h1 class = "display-5 font-weight-bold text-center " style="color: #000000; font-size: 6rem" > Floor1 </h1>
                   
                </div>
            </div>
        </div>    
    </header>

    <!--Section Detail -->
    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> แผนผังชั้น1 </h1>
        </div>
      </div>

      <!--Section ShowDetail-->
    <section>
      <div class="row">
        <div class="col-md-8">
            <img src="assets/image/diagram/floor1.jpg"class="img-fluid" width="800" height="600" alt="">
        </div>

        <div class="col-md-4 pl-5 text-center " style=" height: 180px; overflow: scroll;">
          <h2> เลือกห้อง </h2> 
          <input type="button" class="btn btn-primary active dropdown-item p-2"  value = "IF-109" id = "b109">
          <input type="button" class="btn btn-secondary active dropdown-item p-2"  value = "IF-111" id = "b111">
          <input type="button" class="btn btn-primary active dropdown-item p-2"  value = "IF-112" id = "b112">
          <input type="button" class="btn btn-secondary active dropdown-item p-2"  value = "IF-115" id = "b115">                              
          
        </div>              
      </div> 
    </section>
       

      <section>
        <div class="row">
          <div class="col-md-12 pt-3">
            <a href="#" class="badge badge-danger p-2"> ยังไม่ดำเนินการ </a>
            <a href="#" class="badge badge-warning p-2"> ดำเนินการอยู่ </a>
            <a href="#" class="badge badge-success p-2"> ดำเนินการเรียบร้อยแล้ว</a>
          </div>
        </div>
      </section>  
      
      <div class="row pt-5">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class=""> <B>แจ้งอุปกรณ์เสียที่นี่</B> </h5>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name"> ชื่อผู้แจ้ง </label>
                    <input type="text" id="name" class="form-control" placeholder="ชื่อของคุณ">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phone"> เบอร์โทรศัพท์ </label>
                    <input type="text" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์ของคุณ">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="floor"> ชั้น </label>
                    <input type="text" id="floor1" class="form-control" placeholder="ชั้น7">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="room"> ห้อง </label>
                    <input type="text" id="room1" class="form-control" placeholder="ห้องที่ต้องการแจ้ง">
                 </div>
                 
                 <div class="col-md-4">
                  <form>
                      <div class="form-group">
                        <label for="exampleFormControlFile1"> Upload file image </label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                  </form>
                </div>

                  <div class="form-group col-12">
                    <label for="message"> ข้อความของคุณ </label>
                    <textarea id="message" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่ีนี่"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary d-block mx-auto"> ส่งข้อความ </button>
                </div>
              </form>

            </div>
          </div>
        </div>
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
                <li class="nav-item ">
                    <a class="nav-link" href="1-Homepage.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
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
  
                <li class="nav-item active">
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