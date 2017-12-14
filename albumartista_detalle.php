<?php 
include('config.php');
$idartista=$_REQUEST["idartista"];

$sql = "select *from artista where idartista=".$idartista; //get article id too
    
        $results = $db->query($sql);
$rows=$results->fetch_row()
?>
        <div class="w3-section w3-white w3-container">  
                
                <?php   
        echo "<div class='w3-mobile w3-card-4' style='width:50%;'>";
        echo "<header class='w3-container w3-blue'>";
        echo "<h1>".$rows[1].' '.$rows[2]."</h1>";
        echo "</header>";

        echo "<div class='w3-container'>";
        echo "<img src='http://localhost/".$rows[5]."' width='100%'>";
        echo "<p>NACIONALIDAD:".$rows[3]."</p>";
        echo "<p>FECHA NACIMIENTO:".$rows[4]."</p>";
        echo "<a href='albumdeartista.php?idartista=".$idartista."&pagina=1' class='w3-button w3-block  w3-green w3-margin-bottom' >VER ALBUMS DEL ARTISTA</a>";
        echo "</div>";
        echo "<footer class='w3-container w3-blue'>";
   
        echo "</footer>";
        echo "</div>";
                  
        ?>
    </div>