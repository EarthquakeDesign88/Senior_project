<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php include_once('../authen.php') ?>
<?php
    
    if(isset($_POST['submit'])){
        $sql =   "UPDATE `form` 
                    -- Change Status
                  SET `id_statusform` = '".$_POST['status']."' ,
                    -- Change update time
                  `update_status` = '".date("Y-m-d H:i:s")."',
                  `update_admin` = '".$_SESSION['first_name']." ".$_SESSION['last_name']."'
                  WHERE `id_form` = '".$_POST['id']."' ;";

                  
     
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

