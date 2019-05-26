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
                    <h1 class = "display-5 font-weight-bold text-center " style="color: #000000; font-size: 6rem" > Floor2 </h1>
                   
                </div>
            </div>
        </div>    
    </header>

    <!--Section Detail -->
    <section class="container py-3">
      <div class="row">
        <div class="col-12">
            <h1 class = "border-short-bottom text-center" style="color: #000000 "> แผนผังชั้น2 </h1>
        </div>
      </div>

    <!--Section ShowDetail-->

    <section>
      <div class="row">
        <div class="col-md-12">
            <img src="assets/image/diagram/floor2.jpg"class="img-fluid p-1" width="1300" height="200" alt="">
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
              <form method = "post" action = "php/form.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name"> ชื่อผู้แจ้ง </label>
                    <input type="text" id="name" name="name" class="form-control"required placeholder="ชื่อของคุณ">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phone"> เบอร์โทรศัพท์ </label>
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์ของคุณ">
                  </div>



                  <div class="form-group col-md-4">
                    <label for="floor"> ชั้น </label>
                    <input disable selected type="text " id="floor" name="floor" class="form-control" required value = "ชั้น 2">
                  </div>

                  <div class="form-group col-md-4 ">
                    <label  for="area "> ห้อง/บริเวณ </label> <br>
                    <select name="area" class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">
                      <option value="IF-208"> IF-208 </option>
                      <option value="IF-209"> IF-209 </option>
                      <option value="IF-210"> IF-210 </option>
                      <option value="IF-211"> IF-211 </option>
                      <option value="IF-212"> IF-212 </option>
                      <option value="IF-215"> IF-215 </option>
                      <option value="IF-216"> IF-216 </option>
                      <option value="IF-217"> IF-217 </option>
                      <option value="IF-218"> IF-218 </option>
                      <option value="IF-219"> IF-219 </option>
                      <option value="IF-220"> IF-220 </option>
                      <option value="IF-223"> IF-223 </option>
                      <option value="รองคณบดี 5"> รองคณบดี 5 </option>
                      <option value="รองคณบดี 6"> รองคณบดี 6 </option>
                      <option value="ห้องถ่ายเอกสาร ชั้น2"> ห้องถ่ายเอกสาร ชั้น2  </option>
                      <option value="ห้องเก็บพัสดุ ชั้น2"> ห้องเก็บพัสดุ ชั้น2  </option>
                      <option value="ห้องน้ำชาย ชั้น2"> ห้องน้ำชาย ชั้น2  </option>
                      <option value="ห้องน้ำหญิง ชั้น2"> ห้องน้ำหญิง ชั้น2 </option>
                      <option value="ห้องน้ำผู้พิการ ชั้น2"> ห้องน้ำผู้พิการ ชั้น2  </option>
                      <option value="ห้องแม่บ้าน ชั้น2"> ห้องแม่บ้าน ชั้น2  </option>
                      <option value="บันได ชั้น2"> บันได ชั้น2 </option>
                      <option value="ห้องสื่อสาร ชั้น2"> ห้องสื่อสาร ชั้น2 </option>
                      <option value="ลิฟต์1 ชั้น2"> ลิฟต์1 ชั้น2</option>
                      <option value="ลิฟต์2 ชั้น2"> ลิฟต์2 ชั้น2</option>
                      <option value="ลิฟต์3 ชั้น2"> ลิฟต์3 ชั้น2</option>
                      <option value="ลิฟต์ดับเพลิง ชั้น2"> ลิฟต์ดับเพลิง ชั้น2 </option>
                      <option value="ห้องไฟฟ้า ชั้น2"> ห้องไฟฟ้า ชั้น2 </option>
                      <option value="ทางหนีไฟ ชั้น2"> ทางหนีไฟ ชั้น2 </option>
                     
              
                    </select>
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
                    <textarea id="message2" name="message" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                  </div>
                  <button type="submit" id="btn-submit2" name="btn-submit2" class="btn btn-primary d-block mx-auto"> ส่งข้อความ </button>
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
