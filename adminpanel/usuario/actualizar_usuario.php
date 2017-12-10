<?php 

require_once("../../session.php");
$idusuario=$_REQUEST["idusuario"];
$nombre = $_REQUEST["txtnombre"];
$pass = $_REQUEST["txtpass"];
$rol=$_REQUEST["cborol"];
$estado=$_REQUEST["cboestado"];

    $query="update usuario set login='".$nombre."',pass='".$pass."',idrol=".$rol.",activo=".$estado." where idusuario=".$idusuario;
    
      if(mysqli_query($db, $query))
      {
          echo "Agregado Correctamente";
          header('Location: ../usuario.php?idusuario='.$idusuario);
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }

?>
