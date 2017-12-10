<?php 

require_once("../../session.php");
$idcancion=$_REQUEST["idcancion"];
$nombre = $_REQUEST["txtnombre"];
$genero = $_REQUEST["txtgenero"];
$album =$_REQUEST["cboalbum"];
$foto = $_REQUEST["txtfoto"];
$rut="img/";
$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$dir_subida = '../../img/';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    echo "El fichero es válido y se subió con éxito.\n";
    
    $query="update cancion set nombre='".$nombre."',genero='".$genero."',portada='".$foto2."',idalbum=".$album." where idcancion=".$idcancion;

      if(mysqli_query($db, $query))
      {
          echo "Agregado Correctamente";
          header('Location: ../canciones.php');
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>
