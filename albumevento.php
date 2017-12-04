<?php 
include('config.php');
$sql = "SELECT e.idevento,e.nomevento,e.fechaevento,IF(e.estadoevento=1,'ACTIVO','INACTIVO') as estado,e.portada,a.nombreartista from evento e inner join artista a on a.idartista=e.idartista"; //get article id too
        $results = $db->query($sql);
?>
        <div class="w3-section w3-white w3-container">     
                 <?php
                                        while($rows=$results->fetch_row())
                                        {
                                              
                echo "<div class='w3-col s2' style='width:20%'>";
                echo "<img src='http://localhost/".$rows[4]."' width='150px' style='width:100%;height:250px;'>";
                echo "<div onclick='document.getElementById('id01').style.display='block'";
                echo "class='w3-button  w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[1]."</p>";
                echo "</div>";
                echo "</div>";
                     }
                ?>   
    </div>