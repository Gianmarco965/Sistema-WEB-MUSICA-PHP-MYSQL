<?php 
include('config.php');
$idcancion=$_REQUEST["idcancion"];

$sql = "SELECT c.idcancion,a.nombrealbum,c.nombre,c.genero,c.portada,c.mp3,c.mp4 from cancion c inner JOIN album a on a.idalbum=c.idalbum where c.idcancion=".$idcancion; //get article id too
    
        $results = $db->query($sql);
$rows=$results->fetch_row()
?>
       <div class="w3-row">
       <div class="w3-col w3-padding s6 w3-mobile">
        <div class="w3-section w3-white w3-container">  
                
                <?php   
        echo "<div class='w3-mobile w3-card-4' style='width:50%;'>";
        echo "<header class='w3-container w3-blue'>";
        echo "<h1>".$rows[2]."</h1>";
        echo "</header>";

        echo "<div class='w3-container'>";
        echo "<img src='http://localhost/".$rows[4]."' width='100%'>";
        echo "<audio controls>";
        echo "<source  src='http://localhost/audio/".$rows[5]."' type='audio/mpeg'>";
        echo "Your browser does not support the audio element.";
        echo "</audio>";
 
        echo "<p>ALBUM:".$rows[1]."</p>";
        echo "<p>GENERO:".$rows[3]."</p>";
        echo "</div>";
        echo "<footer class='w3-container w3-blue'>";
        echo "</footer>";
        echo "</div>";

        ?>
    </div>
    </div>
      <div class="w3-col s4 w3-padding w3-mobile">
    
       <?php 
        
        echo "<iframe class='w3-mobile' width='720'  height='520' src='".$rows[6]."'>";
        echo "</iframe>";
        ?>
        

    </div>
    </div>
    
              