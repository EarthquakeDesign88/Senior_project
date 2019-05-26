<?php
    require_once('php/connect.php');

    $sql = "SELECT * FROM article";
    $result = $conn->query($sql) or die($conn->error);

   
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
    
    <title> Blog </title>


</head>
<body>
     <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->
    
    
    
    <!--Section Navbar-->
        <?php include_once('include/navbar.php')?>
    
    <!--Section Page-title-->
     <header  class="page-title jarallax" data-jarallax ='{"speed": 0.6}' style="background-image: url('https://media.kare11.com/assets/KARE/images/613689723/613689723_750x422.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class = "display-5 font-weight-bold" style="color:blue"> แนะนำห้องเรียน </h1>
                    <p class = "lead" style="color:blue">  Faculty of Science Burapha University </p>
                </div>
            </div>
        </div>    
    </header>

    <!--Section Blog-->
    <section class="container py-5">
        <div class="row pb-3">
            <div class="col-12 text-center">
                <div class="btn-group-custom py-5">
                    <a href="ClassRoom.php">
                        <button class="btn btn-primary active"> ห้องเรียน </button>
                    </a>
                    <a href="ComputerRoom.php">
                        <button class="btn btn-secondary active"> ห้องคอมพิวเตอร์ </button>
                    </a>
                    <a href="TeachingRoom.php">
                        <button class="btn btn-primary active"> ห้องรอสอน </button>
                    </a>
                    <a href="MeetingRoom.php">
                        <button class="btn btn-secondary active"> ห้องประชุม </button>
                    </a>
                    <a href="Library.php">
                        <button class="btn btn-primary active"> ห้องสมุด</button>
                    </a>
                    <a href="StudyRoom.php">
                        <button class="btn btn-secondary active"> ห้องจัดการศึกษา </button>
                    </a>

                </div>          
            </div>
        </div>

        <div class="row">
            <?php while($row = $result->fetch_assoc()) { ?>
            <section class = "col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                <a href="Blog-detail.php?id=<?php echo $row['id']?>" class="warper">
                    <img src="<?php echo $row['image']?> </h5>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['room_name']?> </h5>
                    <p class="card-title"> <?php echo $row['title']?> </h5>
                    <p class="card-title"> <?php echo $row['detail']?> </h5>
                </div>
                                         
                </div>                                     
            </section>
            <?php } ?>
                  
       
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