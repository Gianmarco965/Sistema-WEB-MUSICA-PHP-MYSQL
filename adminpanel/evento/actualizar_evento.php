<?php 

require_once("../../session.php");
$idevento=$_REQUEST["idevento"];
$nombre = $_REQUEST["txtnombre"];
$fecha = $_REQUEST["txtfecha"];
$estado=$_REQUEST["cboestado"];
$foto = $_REQUEST["txtfoto"];
$artista=$_REQUEST["cboartista"];
$rut="img/";
$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$dir_subida = '../../img/';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    echo "El fichero es válido y se subió con éxito.\n";
    
    $query="update evento set nomevento='".$nombre."',fechaevento='".$fecha."',estadoevento=".$estado.",portada='".$foto2."',idartista=".$artista." where idevento=".$idevento;

      if(mysqli_query($db, $query))
      {
          echo "Agregado Correctamente";
          header('Location: ../eventos.php');
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>
