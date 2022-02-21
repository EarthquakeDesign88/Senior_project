<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
    
    if(isset($_POST['submit'])){
        $id = $_GET['username_admin'];
        $sql = "UPDATE `admin` 
                SET    `first_name` = '".$_POST['first_name']."', 
                       `last_name` = '".$_POST['last_name']."', 
                       `id_status` = '".$_POST['status']."', 
                       `phone` = '".$_POST['phone']."', 
                       `line_id` = '".$_POST['line_id']."', 
                       `updated_at` = '".date("Y-m-d H:i:s")."' 
                 WHERE `username_admin` = '".$_POST['username_admin']."' ;";
     
        $result = $conn->query($sql);

        // print_r ($sql) ;
        if($result){
            echo '<script> alert("อัพเดทข้อมูลเสร็จเรียบร้อย")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Created Error")</script>'; 
            header('Refresh:0; url=index.php');
        }
                        
    } else{
        header('Refresh:0; url=index.php');
        
    }
    if(isset($_POST['delete'])){
        $id = $_GET['username_admin'];
        $sql = "DELETE FROM `admin` WHERE `admin`.`username_admin` = '".$id."'";
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

