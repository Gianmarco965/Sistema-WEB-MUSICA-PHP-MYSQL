<?php 

require_once("../../session.php");
$nombre = $_REQUEST["txtnombre"];
$genero = $_REQUEST["txtgenero"];
$album =$_REQUEST["cboalbum"];
$foto = $_REQUEST["txtfoto"];
$mp3=$_REQUEST["txtmp3"];
$mp4=$_REQUEST["txtmp4"];

$rut="img/";
$rut2="audio/";
$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$audio2=$rut2.''. basename($_FILES['txtmp3']['name']);

$dir_subida = '../../img/';
$dir_subida2='../../audio';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);
$fichero_subido2=$dir_subida2 . basename($_FILES['txtmp3']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    if (move_uploaded_file($_FILES['txtmp3']['tmp_name'],$fichero_subido2))
    {
        echo "El fichero es válido y se subió con éxito.\n";
    
        $query="insert into cancion values(null,".$album.",'".$nombre."','".$genero."','".$foto2."','".basename($_FILES['txtmp3']['name'])."','".$mp4."')";

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
