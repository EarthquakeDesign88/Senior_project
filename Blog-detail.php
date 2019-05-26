<?php
  require_once('php/connect.php');

  $sql = "SELECT * FROM article WHERE id ='".$_GET['id']."' ";
  $result = $conn->query($sql) or die($conn->error);

  if(result->num_rows > 0){
    $rows = $result->fetch_assoc();
  } else {
    echo "NO data";
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
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://www.embedgooglemap.net">
    
    <title> Classroom </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Present room
    4.Section Footer -->
    
    
    
    <!--Section Navbar-->
      <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="jarallax" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://images.unsplash.com/photo-1510531704581-5b2870972060?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80');">
      <div class="blog-image">
        <h1 class = "display-5 font-weight-bold"> ห้องเรียน </h1>
        
      </div>
    </header>
    <!--Section test content-->
    <section class="container blog-content">
      <div class="row">
        <div class="col-12">
           
             On December, 9th 2009 the Department of Computer Science is promoted to Faculty of Informatics for its high performances and responsibilities.
                            
            We are the leader in Computer Science and Information Technology in the Eastern part of Thailand. We offer both undergraduate and graduate programs which are suitable for your needs. We have competent instructors and standard laboratory equipment. You can access digital library online 24/7. Study with us for your brighter future!
            
                  Programs <br/>
            
            <li>  Bachelor of Science in Computer Science </li> <br/>
            
            <li>Bachelor of Science in Information Technology </li> <br/>
            
            <li> Bachelor of Science in Software Engineering </li> <br/>
            
            <li> Master of Science in Informatics </li> <br/>
            
            <li> Doctor of Philosophy in Informatics </li> <br/> <br/>
            
            <b>Location </b><br/>
            
            169 Longhard Bangsaen Rd., Saensook, Muang, Chon Buri 20131, Thailand <br/>
        </div>
      </div>

           
    <div class="col-12 p-2">
      <div class="owl-carousel owl-theme">
        <section class = "col-12 p-2">
          <div class="card h-100 ">
          <a href="MeetingRoom.php?id004" class="warper">
              <img src="assets/image/blog/ห้องประชุม.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
              <h5 class="card-title"> ห้องประชุม </h5>
              <p class="card-text"> 11 rooms </p>
          </div>

          </div>                                     
        </section>

        <section class = "col-12 p-2">
          <div class="card h-100 ">
          <a href="MeetingRoom.php?id004" class="warper">
              <img src="assets/image/blog/ห้องประชุม.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
              <h5 class="card-title"> ห้องประชุม </h5>
              <p class="card-text"> 11 rooms </p>
          </div>

          </div>                                     
        </section>

        <section class = "col-12 p-2">
          <div class="card h-100 ">
          <a href="MeetingRoom.php?id004" class="warper">
              <img src="assets/image/blog/ห้องประชุม.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
              <h5 class="card-title"> ห้องประชุม </h5>
              <p class="card-text"> 11 rooms </p>
          </div>

          </div>                                     
        </section>

        <section class = "col-12 p-2">
          <div class="card h-100 ">
          <a href="MeetingRoom.php?id004" class="warper">
              <img src="assets/image/blog/ห้องประชุม.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
              <h5 class="card-title"> ห้องประชุม </h5>
              <p class="card-text"> 11 rooms </p>
          </div>

          </div>                                     
        </section>

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
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
   

</body>
</html>