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
    
    <title> Help </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    
    <!--Section Navbar-->
        <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
    <header  class="page-title jarallax " data-jarallax ='{"speed": 0.6}' style="background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class = "display-5 font-weight-bold text-left" style="color: #ffffff; font-size: 4rem " > ช่วยเหลือ </h1>
                    <h4 style="color: #ffffff; font-size: 2rem">  การแจ้งอุปกรณ์เสียหาย </h4>    
                </div>    
            </div>
        </div>
    </header>

    <!--Section Page-Detail-->
    <div  class="page-title jarallax  pt-5 pb-0" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://images.unsplash.com/photo-1518715058720-e56f02e77fe5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')">
        <div class="container">
                <div class="title">
                    <h1 class ="border-short-bottom text-center text-warning " style="font-size: 3.5rem"> ทำตามขั้นตอนดังนี้ </h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/image/help/t1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6" >               
                        <h2 class="text-light p-2 " style="font-size: 3rem"> 1.เลือกชั้นที่ต้องการแจ้ง </h2>
                        
                    </div>
                </div>
                <div class="row mt-5 d-flex flex-sm-row-reverse">
                    <div class="col-lg-6 pull-right-xs">
                        <img src="assets/image/help/t1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-light p-2" style="font-size: 3rem"> 2.ดูแผนผังแล้วเลือกห้องที่ต้องการแจ้ง  </h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <img src="assets/image/help/t1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-light p-2" style="font-size: 3rem"> 3.ใส่คำร้องลงไปว่าต้องการแจ้งเรื่องใด </h2>
                    </div>
                </div>
                <div class="row mt-5 d-flex flex-sm-row-reverse">
                    <div class="col-lg-6 pull-right-xs">
                        <img src="assets/image/help/t1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-light p-2" style="font-size: 3rem"> 4.เมื่อทำการพิมพ์เรื่องร้องเสร็จแล้ว กดยืนยัน </h2>
                    </div>
                </div>
            
    </div>
    
    
                
            
    
    <!--Section Footer-->
        <?php include_once('include/footer.php')?>
       
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>

</body>
</html>