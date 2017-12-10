<?php 

require_once("../../session.php");
$idcancion=$_REQUEST["idcancion"];
$nombre = $_REQUEST["txtnombre"];
$genero = $_REQUEST["txtgenero"];
$album =$_REQUEST["cboalbum"];
$foto = $_REQUEST["txtfoto"];
$mp4=$_REQUEST["txtmp4"];

$rut="img/";
$rut2="audio/";

$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$audio2=$rut2.''.basename($_FILES['txtmp3']['name']);

$dir_subida = '../../img/';
$dir_subida2='../../audio/';

$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);
$fichero_subido2=$dir_subida2 . basename($_FILES['txtmp3']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
   if (move_uploaded_file($_FILES['txtmp3']['tmp_name'], $fichero_subido2)) {
       
        echo "El fichero es válido y se subió con éxito.\n";
        $query="update cancion set nombre='".$nombre."',genero='".$genero."',portada='".$foto2."',idalbum=".$album.",mp4='".$mp4."',mp3='".basename($_FILES['txtmp3']['name'])."' where idcancion=".$idcancion;

        if(mysqli_query($db, $query))
          {
              echo "Agregado Correctamente";
              header('Location: ../canciones.php');
          } 
        else
          {
            echo "ERROR: Could not able to execute";
          }
        
     }
    
    
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>
