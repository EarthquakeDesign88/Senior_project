<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
  require_once('connect.php');
  $id = $_POST['area'];
  $floor = $_POST['floor'];
  
  $list = mysqli_query($conn, "SELECT id_areafloor, floor, area.areaname AS area
  FROM area_floor
  JOIN area ON area_floor.id_area = area.id_area
  WHERE floor = '".$floor."'
  AND area.areaname = '".$id."' ") ;
  $row = mysqli_fetch_assoc($list) ;
//   $result = $conn->query($sql);
//   $row = $result->fetch_assoc();
//   print_r($row); 
?>

<?php
    require_once('connect.php');
    // require_once('connect.php');
    $remoteip = $_SERVER['REMOTE_ADDR'];

//    $namearea = $row['Area'];
   $namearea = $row['id_areafloor'];
    
    // print_r($namearea); 
    
    // $test = 'ข้อความ';
    // print_r($namearea); 
    define('LINE_API' ,"https://notify-api.line.me/api/notify");
    define('LINE_TOKEN',"jN9XMkhCfcKtVsGw7DpdRW9REXzB7MeIYjXFelz59lI");

    function sendToLine (){
        $text = "มีผู้แจ้งปัญหาอุปกรณ์เสียหาย" ."\n";
        $text .= "ชื่อ : " . $_POST['name'] ."\n";
        $text .="ชั้ัน : " . $_POST['floor']."\n";
        $text .="ห้อง/บริเวณ : " .$_POST['area']. "\n";
        $text .="ปัญหาที่พบ : " .$_POST['topic']. "\n";
        $text .="รายละเอียด: " . $_POST['detail'];
        
        $message = array(
            'message' => $text
        );
        notify_message($message);
        }
        
        function notify_message($message) {
        $queryData = http_build_query($message,'','&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n" ,
                'content' => $queryData
            )
        );
        
        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API,FALSE,$context);
        }
        
        
        
       
        
   //f1
   if(isset($_POST['btn-submit'])){
      
    sendToLine () ;
    // $namearea = ".$_POST['area']." ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
       $sql = "INSERT INTO form(name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['topic']."',
    '".$_POST['detail']."',
    '".date("Y-m-d H:i:s")."',
    '".$new_name."',
    '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../cart.php');
}
           
}
else{
    $sql = "INSERT INTO form(name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['topic']."',
    '".$_POST['detail']."',
    '".date("Y-m-d H:i:s")."',
    '".$new_name."',
    '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}


//f2
    if(isset($_POST['btn-submit2'])){
        sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}



    //f3
    if(isset($_POST['btn-submit3'])){
        sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}

//f4
if(isset($_POST['btn-submit4'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}



//f5
if(isset($_POST['btn-submit5'])){
      
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";

    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}

//f6
if(isset($_POST['btn-submit6'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}

//f7
if(isset($_POST['btn-submit7'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";

    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}

//f8
if(isset($_POST['btn-submit8'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}

//f9
if(isset($_POST['btn-submit9'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}
//f10
if(isset($_POST['btn-submit10'])){
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}
//f11
if(isset($_POST['btn-submit11'])){
      
    sendToLine () ;

    $temp = explode('.', $_FILES['image']['name']);
    $new_name = round(microtime(true)*9999) . '.' . end($temp);
    $url_upload = '../assets/image/image_upload/' . $new_name;


    if(move_uploaded_file($_FILES['image']['tmp_name'], $url_upload)){
        $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,image ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$new_name."',
     '".$namearea."');";
 
 
     $result = $conn->query($sql);
 if($result){
     header('location:../Repair.php');
 }
            
 }
 else{
     $sql = "INSERT INTO form (name , phone ,topic,detail ,datetime_submit ,id_areafloor )
     VALUES ('".$_POST['name']."',
     '".$_POST['phone']."', 
     '".$_POST['topic']."',
     '".$_POST['detail']."',
     '".date("Y-m-d H:i:s")."',
     '".$namearea."');";


    $result = $conn->query($sql);
if($result){
    header('location:../Repair.php');
}
}
} 

else{
header('location:../Repair.php');

}
?>