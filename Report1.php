
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
        <div class="col-md-12">
            <img src="assets/image/diagram/floor1.jpg "class="img-fluid p-1  " width="1300" height="200" alt="">
        </div>

      </div> 
    </section>

    <section class="container p-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> รายการแจ้งซ่อม </h1>
        </div>
      </div>
    </section>
    
       

      <section class = "pt-5 text-center " style=" height:400px; overflow: scroll;">
        <table class="table"  >
          <thead class="thead-dark" >
            <tr>
              <th scope="col"> ห้อง </th>
              <th scope="col"> รายการที่แจ้ง </th>          
              <th scope="col" > สถานะ </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row"> IF-111</th>
              <td> ไฟเสีย </td>
         
              <td><a href="#" class="badge badge-danger p-2"> ยังไม่ดำเนินการ </a></td>
            </tr>
            
            <tr>
              <th scope="row"> IF-111 </th>
              <td> มีน้ำรั่วตามฝ้า </td>
             
              <td> <a href="#" class="badge badge-warning p-2"> กำลังดำเนินการอยู่ </a></td>
            </tr>
           
            <tr>
              <th scope="row"> IF-111 </th>
              <td> Larry </td>
             
              <td><a href="#" class="badge badge-danger p-2"> ยังไม่ได้ดำเนินการ </a></td>
            </tr>

            <tr>
              <th scope="row"> IF-111</th>
              <td> ไฟเสีย </td>
         
              <td><a href="#" class="badge badge-warning p-2"> กำลังดำเนินการอยู่ </a></td>
            </tr>

            <tr>
              <th scope="row"> IF-111</th>
              <td> ไฟเสีย </td>
         
              <td><a href="#" class="badge badge-danger p-2"> ยังไม่ได้ดำเนินการ </a></td>
            </tr>

            <tr>
              <th scope="row"> IF-111</th>
              <td> ไฟเสีย </td>
         
              <td><a href="#" class="badge badge-danger p-2"> ยังไม่ได้ดำเนินการ </a></td>
            </tr>
          </tbody>
        </table>

      </section>  
      
      <div class="row pt-5">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class=""> <B>แจ้งอุปกรณ์เสียที่นี่</B> </h5>
              <form method = "post" action ="php/form.php" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name"> ชื่อผู้แจ้ง </label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="ชื่อของคุณ">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phone"> เบอร์โทรศัพท์ </label>
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์ของคุณ">
                  </div>



                  <div class="form-group col-md-4">
                  <label for="floor"> ชั้น </label>
                    <input  readonly type="text " id="floor" name="floor" class="form-control" value = "ชั้น 1">
                  
                  </div>

                  <div class="form-group col-md-4 ">
                    <label  for="area "> ห้อง/บริเวณ </label> <br>
                    <select  name="area" id="area"  class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">
                      <option value="IF-109"> IF-109 </option>
                      <option value="IF-111"> IF-111 </option>
                      <option value="IF-112"> IF-112 </option>
                      <option value="IF-115"> IF-115 </option>
                      <option value="ห้องน้ำชาย ชั้น1"> ห้องน้ำชาย ชั้น1  </option>
                      <option value="ห้องน้ำหญิง ชั้น1"> ห้องน้ำหญิง ชั้น   </option>
                      <option value="ห้องน้ำผู้พิการ ชั้น1"> ห้องน้ำผู้พิการ ชั้น1  </option>
                      <option value="ห้องแม่บ้าน ชั้น1 "> ห้องแม่บ้าน ชั้น1  </option>
                      <option value="บันได ชั้น1"> บันได ชั้น1 </option>
                      <option value="ห้องสื่อสาร ชั้น1"> ห้องสื่อสาร ชั้น1 </option>
                      <option value="ลิฟต์1 ชั้น1"> ลิฟต์1 ชั้น1</option>
                      <option value="ลิฟต์2 ชั้น1"> ลิฟต์2 ชั้น1</option>
                      <option value="ลิฟต์3 ชั้น1"> ลิฟต์3 ชั้น1</option>
                      <option value="ลิฟต์ดับเพลิง ชั้น1"> ลิฟต์ดับเพลิง ชั้น1 </option>
                      <option value="ห้องไฟฟ้า ชั้น1"> ห้องไฟฟ้า ชั้น1 </option>
                      <option value="ทางหนีไฟ ชั้น1"> ทางหนีไฟ ชั้น1 </option>
                     
              
                    </select>
                 </div>

              
                     

                <div class="col-md-4">
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1"> Upload file image </label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                  </div>

                  <div class="form-group col-12">
                    <label for="message"> ข้อความของคุณ </label>
                    <textarea id="message" name="message" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่ีนี่"></textarea>
                  </div>
                  <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto"> ส่งข้อความ </button>
                  
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