<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select login,idusuario from usuario where login = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $idusuario=$row["idusuario"];
   $login_session = $row['login'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: ../autenticar.php");
   }
?>