<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
       echo $mypassword;
      $sql = "SELECT idusuario,activo FROM usuario WHERE login = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['activo'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) { 
         $_SESSION['login_user'] = $myusername;
            
         header("location: adminpanel/dashboard.php");
      }else {
         $error = "Tu usuario o password son incorrectos";
        header("location: index.php");
          
      }
   }
else
{
     header("location: index.php");
    
}
?>
