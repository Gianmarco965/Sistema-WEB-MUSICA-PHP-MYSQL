<?php 
include('config.php');
$sql = "SELECT a.idalbum,a.nombrealbum,a.anio,a.valor,d.nomdisquera,CONCAT(r.nombreartista ,' ',r.apellidoartista) as 'artista',a.portada FROM album a inner join artista r on r.idartista=a.idartista inner join disquera d on d.iddisquera=a.iddisquera"; //get article id too
        $results = $db->query($sql);
?>
        <div class="w3-section w3-white w3-container">     
                 <?php
                                        while($rows=$results->fetch_row())
                                        {
                                              
                echo "<div class='w3-col s2 w3-mobile' style='width:20%'>";
                echo "<img src='http://localhost/".$rows[6]."' width='150px' style='width:100%;'>";
                echo "<a href='album_cancion.php?idalbum=".$rows[0]."'";
                echo "class='w3-button w3-blue w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[1]."</p>";
                echo "</a>";
                echo "</div>";
                     }
                ?>   
    </div>