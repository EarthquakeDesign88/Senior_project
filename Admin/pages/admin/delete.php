<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
    // ไม่ได้ใช้
    $id = $_GET['id'];
    if(isset($id) && $id != $id ){
        $sql = "DELETE FROM `admin` WHERE `admin`.`id` = '".$id."'";
        $result = $conn->query($sql);

       if($conn->affected_rows) {
            echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อยแล้ว")</script>'; 
            header('Refresh:0; url=index.php');
       } else {
            echo '<script> alert("ไม่มีข้อมูลให้คุณลบ ลองใหม่อีกครั้ง")</script>'; 
            header('Refresh:0; url=index.php');    
       }

    } else {
        header('Refresh:0;url=index.php');
    }
?>