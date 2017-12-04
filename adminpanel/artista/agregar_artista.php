<?php 

require_once('../../session.php');
$nombre = $_REQUEST['txtnombre'];
$apellido = $_REQUEST['txtapellido'];
$nacionalidad =$_REQUEST['txtnacionalidad'];
$fecha = $_REQUEST['txtfecha'];
$foto = $_REQUEST['txtfoto'];
$rut="img/";
$foto2 =$rut.$foto;
$dir_subida = '../../img/';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    echo "El fichero es válido y se subió con éxito.\n";
    
    $query="insert into artista values(null,'".$nombre."','".$apellido."','".$nacionalidad."','".$fecha."','".$foto2."')";

      if(mysqli_query($db, $query))
      {
          echo "Agregado Correctamente";
          header('Location: ../artistas.php');
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>
