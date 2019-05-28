<?php //การเข้าถึง
   session_start();
   require_once('../../../php/connect.php');
   
   $uri = $_SERVER['REQUEST_URI'];
   $array = explode('/', $uri);
   $key = array_search("pages", $array);
   $page = $array[$key + 1];

   if( !isset($_SESSION['authen_id'] ) ){
      header('Location: ../../login.php');  
   } else if($page =='admin' && $_SESSION['status'] =='admin' ){
      header('Location: ../dashboard/'); 
   }
?>