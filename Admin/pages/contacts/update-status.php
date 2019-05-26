<?php include_once('../authen.php') ?>
<?php
    
    if(isset($_POST['submit'])){
        $sql =   "UPDATE `form` 
                  SET `status` = '".$_POST['status']."' 
                  WHERE `form`.`id` = '".$_POST['id']."' ;";
     
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

