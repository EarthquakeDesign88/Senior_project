<?php include_once('../authen.php') ?>
<?php
    
    if(isset($_POST['submit'])){
        $sql = "UPDATE `admin` 
                SET    `first_name` = '".$_POST['first_name']."', 
                       `last_name` = '".$_POST['last_name']."', 
                       `status` = '".$_POST['status']."', 
                       `phone` = '".$_POST['phone']."', 
                       `line_id` = '".$_POST['line_id']."', 
                       `updated_at` = '".date("Y-m-d H:i:s")."' 
                 WHERE `id` = '".$_POST['id']."';";
     
        $result = $conn->query($sql);
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
?>

