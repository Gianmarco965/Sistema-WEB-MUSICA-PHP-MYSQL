<?php 

require_once("../../session.php");
$idalbum=$_REQUEST["idalbum"];
$nombre = $_REQUEST["txtnombre"];
$anio = $_REQUEST["txtanio"];
$valor =$_REQUEST["txtvalor"];
$disquera = $_REQUEST["cbodisquera"];
$artista=$_REQUEST["cboartista"];
$foto = $_REQUEST["txtfoto"];
$rut="img/";
$foto2 =$rut.''. basename($_FILES['txtfoto']['name']);
$dir_subida = '../../img/';
$fichero_subido = $dir_subida . basename($_FILES['txtfoto']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['txtfoto']['tmp_name'], $fichero_subido)) {
    
    echo "El fichero es válido y se subió con éxito.\n";
    
    $query="update album set nombrealbum='".$nombre."',anio='".$anio."',valor=".$valor.",iddisquera=".$disquera.",idartista=".$artista.",portada='".$foto2."' where idalbum=".$idalbum;

      if(mysqli_query($db, $query))
      {
          echo "Agregado Correctamente";
          header('Location: ../albums.php');
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>
