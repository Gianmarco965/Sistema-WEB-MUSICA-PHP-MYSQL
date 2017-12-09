<?php 

require_once("../../session.php");
$idartista=$_REQUEST["idartista"];
$nombre = $_REQUEST["txtnombre"];
$apellido = $_REQUEST["txtapellido"];
$nacionalidad =$_REQUEST["txtnacionalidad"];
$fecha = $_REQUEST["txtfecha"];
$foto = $_REQUEST["txtfoto"];
$rut="img/";
$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$dir_subida = '../../img/';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    echo "El fichero es válido y se subió con éxito.\n";
    
    $query="update artista set  nombreartista='".$nombre."',apellidoartista='".$apellido."',nacionalidad='".$nacionalidad."',fechanac='".$fecha."',portada='".$foto2."' where idartista=".$idartista;

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
