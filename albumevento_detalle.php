<?php 
include('config.php');
$idevento=$_REQUEST["idevento"];

$sql = "select e.idevento,e.nomevento,e.fechaevento,e.portada,IF(e.estadoevento,'ACTIVO','INACTIVO') as 'estado',CONCAT(a.nombreartista,' ',a.apellidoartista) as 'artista' from evento e inner JOIN artista a on a.idartista=e.idartista where e.idevento=".$idevento; //get article id too
    
        $results = $db->query($sql);
$rows=$results->fetch_row()
?>
        <div class="w3-section w3-white w3-container">  
                
                <?php   
        echo "<div class='w3-mobile w3-card-4' style='width:50%;'>";
        echo "<header class='w3-container w3-blue'>";
        echo "<h1>".$rows[1]."</h1>";
        echo "</header>";

        echo "<div class='w3-container'>";
        echo "<img src='http://localhost/".$rows[3]."' width='100%'>";
        echo "<p>FECHA:".$rows[2]."</p>";
        echo "<p>ARTISTA:".$rows[5]."</p>";
        echo "</div>";
        echo "<footer class='w3-container w3-blue'>";
        echo "<h5>".$rows[4]."</h5>";
        echo "</footer>";
        echo "</div>";
                  
        ?>
    </div>