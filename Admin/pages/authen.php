<?php //การเข้าถึง
   session_start();
   require_once('../../../php/connect.php');
   
   $uri = $_SERVER['REQUEST_URI'];
   $array = explode('/', $uri);
   $key = array_search("pages", $array);
   $page = $array[$key + 1];

   if( !isset($_SESSION['username_admin'] ) ){
      header('Location: ../../login.php');  
   } else if($page =='admin' && $_SESSION['id_status'] =='admin' ){
      header('Location: ../report/'); 
   }
?>