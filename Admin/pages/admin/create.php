<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $sql_check_user = "SELECT * FROM `admin` WHERE `username` = '".$_POST['username']."'";
        $check_user= $conn->query($sql_check_user);
        
        if(!$check_user->num_rows){
            $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`first_name`, `last_name`, `username`, `password`, `status`, `phone`, `line_id`, `last_login`, `updated_at`) 
                    VALUES (  '".$_POST['first_name']."', 
                            '".$_POST['last_name']."', 
                            '".$_POST['username']."',   
                            '".$hashed."',
                            '".$_POST['status']."', 
                            '".$_POST['phone']."',
                            '".$_POST['line_id']."',     
                            '".date("Y-m-d H:i:s")."',  
                            '".date("Y-m-d H:i:s")."');";     
            $result = $conn->query($sql);
            if($result){
                echo '<script> alert("สร้าง username เสร็จเรียบร้อยแล้ว")</script>'; 
                header('Refresh:0; url=index.php');
            } else {
                echo '<script> alert("Created Error")</script>'; 
                header('Refresh:0; url=index.php');
            }

        } else {
            echo '<script> alert("username นี้ถูกใช้ไปแล้ว")</script>'; 
            header('Refresh:0; url=index.php');
        }
    } else{
        header('Refresh:0; url=index.php');    
    }
?>