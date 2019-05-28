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
  <script src=""></script>

  <title> Repair </title>


</head>
<style>

</style>

<body>
  <!-- Table Of Content

    1.Section Navbar
    2.Section Page-title 
    3.Section Footer -->



  <!--Section Navbar-->
    <?php include_once('include/navbar.php')?>

  <!--Section Page-title-->
  <header class="page-title jarallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url('https://www.rockwellautomation.com/resources/images/rockwellautomation/publication/repair-shutterstock_133644224--photograph_848w477h.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="display-5 font-weight-bold text-center " style="color: #000000; font-size: 6rem"> Floor9 </h1>

        </div>
      </div>
    </div>
  </header>

  <!--Section Detail-->
  <section class="container py-3">
    <div class="row">
      <div class="col-12">
        <h1 class="border-short-bottom text-center" style="color: #000000 "> แผนผังชั้น9 </h1>
      </div>
    </div>


    <!--Section ShowDetail-->
    <section>
      <div class="row">
        <div class="col-md-12">
            <img src="assets/image/diagram/floor9.jpg"class="img-fluid p-1" width="1300" height="200" alt="">
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
              <form method = "post" action = "php/form.php" enctype="multipart/form-data">
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
                    <input  readonly type="text " id="floor" name="floor" class="form-control" value = "ชั้น 9">
                  </div>

                  <div class="form-group col-md-4 ">
                    <label  for="area "> ห้อง/บริเวณ </label> <br>
                    <select name="area" class = "p-2" style=" height: 40px; width: 300px; overflow: scroll;">
                      <option value="IF-908A"> IF-908A </option>
                      <option value="IF-909A"> IF-909A </option>
                      <option value="IF-910A"> IF-910A</option>
                      <option value="IF-911A"> IF-911A </option>
                      <option value="IF-912A"> IF-912A </option>
                      <option value="IF-913A"> IF-913A</option>
                      <option value="IF-908B"> IF-908B </option>
                      <option value="IF-909B"> IF-909B </option>
                      <option value="IF-910B"> IF-910B</option>
                      <option value="IF-911B"> IF-911B </option>
                      <option value="IF-912B"> IF-912B </option>
                      <option value="IF-913B"> IF-913B </option>
                      <option value="IF-908C"> IF-908C </option>
                      <option value="IF-909C"> IF-909C </option>
                      <option value="IF-910C"> IF-910C </option>
                      <option value="IF-911C"> IF-911C </option>
                      <option value="IF-912C"> IF-912C </option>
                      <option value="IF-913C"> IF-913C </option>
                      <option value="IF-908D"> IF-908D </option>
                      <option value="IF-909D"> IF-909D </option>
                      <option value="IF-910D"> IF-910D </option>
                      <option value="IF-911D"> IF-911D </option>
                      <option value="IF-912D"> IF-912D </option>
                      <option value="IF-913D"> IF-913D </option>
                      <option value="IF-908E"> IF-908E </option>
                      <option value="IF-909E"> IF-909E </option>
                      <option value="IF-910E"> IF-910E </option>
                      <option value="IF-911E"> IF-911E </option>
                      <option value="IF-912E"> IF-912E </option>
                      <option value="IF-913E"> IF-913E </option>
                      <option value="IF-908F"> IF-908F </option>
                      <option value="IF-909F"> IF-909F </option>
                      <option value="IF-910F"> IF-910F </option>
                      <option value="IF-911F"> IF-911F </option>
                      <option value="IF-912F"> IF-912F </option>
                      <option value="IF-913F"> IF-913F </option>
                      <option value="IF-915A"> IF-915A </option>
                      <option value="IF-915B"> IF-915B </option>
                      <option value="IF-915C"> IF-915C </option>
                      <option value="IF-915D"> IF-915D </option>
                      <option value="IF-915E"> IF-915E </option>
                      <option value="IF-915F"> IF-913F </option>
                      <option value="IF-914"> IF-914 </option>
                      <option value="IF-916"> IF-916 </option>
                      <option value="ห้องน้ำชาย ชั้น9"> ห้องน้ำชาย ชั้น9  </option>
                      <option value="ห้องน้ำหญิง ชั้น9"> ห้องน้ำหญิง ชั้น9 </option>
                      <option value="ห้องน้ำผู้พิการ ชั้น9"> ห้องน้ำผู้พิการ ชั้น9  </option>
                      <option value="ห้องแม่บ้าน ชั้น9"> ห้องแม่บ้าน ชั้น9  </option>
                      <option value="บันได ชั้น9"> บันได ชั้น9 </option>
                      <option value="ห้องสื่อสาร ชั้น9"> ห้องสื่อสาร ชั้น9 </option>
                      <option value="ลิฟต์1 ชั้น9"> ลิฟต์1 ชั้น9</option>
                      <option value="ลิฟต์2 ชั้น9"> ลิฟต์2 ชั้น9</option>
                      <option value="ลิฟต์3 ชั้น9"> ลิฟต์3 ชั้น9</option>
                      <option value="ลิฟต์ดับเพลิง ชั้น9"> ลิฟต์ดับเพลิง ชั้น9 </option>
                      <option value="ห้องไฟฟ้า ชั้น9"> ห้องไฟฟ้า ชั้น9 </option>
                      <option value="ทางหนีไฟ ชั้น9"> ทางหนีไฟ ชั้น9 </option>
                     
              
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
                    <textarea id="message" name="message"  rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                  </div>
                  <button type="submit"  id="btn-submit9" name="btn-submit9"  class="btn btn-primary d-block mx-auto"> ส่งข้อความ </button>
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
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="assets/js/jfuntion.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
      <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>