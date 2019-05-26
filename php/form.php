<?php
    require_once('connect.php');
    $remoteip = $_SERVER['REMOTE_ADDR'];

    define('LINE_API' ,"https://notify-api.line.me/api/notify");
    define('LINE_TOKEN',"BivuJd0vou4PRyExaZFjmK1F4R2cE2YoZGL6Jq1w0r7");

    function sendToLine (){
        $text = "มีผู้แจ้งปัญหาอุปกรณ์เสียหาย" ."\n";
        $text .= "ชื่อ : " . $_POST['name'] ."\n";
        $text .="ชั้ัน : " . $_POST['floor']."\n";
        $text .="ห้อง/บริเวณ : " . $_POST['area']."\n";
        $text .="ปัญหาที่พบ : " . $_POST['message'];
        
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
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
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
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
           
} else{
header('Refresh:0; url=Repair.php');

}


//f2
    if(isset($_POST['btn-submit2'])){
      
        sendToLine () ;
        $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
        VALUES ('".$_POST['name']."',
        '".$_POST['phone']."', 
        '".$_POST['floor']."', 
        '".$_POST['area']."', 
        '".$_POST['message']."', 
        '".date("Y-m-d H:i:s")."',
        '".$_POST['image']."');";

    $result = $conn->query($sql);
            
    } else{
    header('Refresh:0; url=../Repair.php');

    }



    //f3
    if(isset($_POST['btn-submit3'])){
      
        sendToLine () ;
        $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
        VALUES ('".$_POST['name']."',
        '".$_POST['phone']."', 
        '".$_POST['floor']."', 
        '".$_POST['area']."', 
        '".$_POST['message']."', 
        '".date("Y-m-d H:i:s")."',
        '".$_POST['image']."');";

    $result = $conn->query($sql);
             
    } else{
    header('Refresh:0; url=../Repair.php');

    }

//f4
if(isset($_POST['btn-submit4'])){
      
    sendToLine () ;   
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f5
if(isset($_POST['btn-submit5'])){
      
    sendToLine () ;  
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f6
if(isset($_POST['btn-submit6'])){
      
    sendToLine () ;
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f7
if(isset($_POST['btn-submit7'])){
      
    sendToLine () ; 
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f8
if(isset($_POST['btn-submit8'])){
      
    sendToLine () ;  
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f9
if(isset($_POST['btn-submit9'])){
    sendToLine () ;
        
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f10
if(isset($_POST['btn-submit10'])){
    sendToLine () ;
        
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}
//f11
if(isset($_POST['btn-submit11'])){
      
    sendToLine () ;
    $sql = "INSERT INTO `form` (`name`, `phone`, `floor`, `area`, `message`, `datetime_submit`, `image`) 
    VALUES ('".$_POST['name']."',
    '".$_POST['phone']."', 
    '".$_POST['floor']."', 
    '".$_POST['area']."', 
    '".$_POST['message']."', 
    '".date("Y-m-d H:i:s")."',
    '".$_POST['image']."');";

$result = $conn->query($sql);
         
} else{
header('Refresh:0; url=../Repair.php');

}


?>