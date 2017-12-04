<?php 
include('config.php');
$sql = "SELECT * from artista"; //get article id too
        $results = $db->query($sql);
?>
        <div class="w3-section w3-white w3-container">     
                 <?php
                                        while($rows=$results->fetch_row())
                                        {
                                              
                echo "<div class='w3-col s2' style='width:20%'>";
                echo "<img src='http://localhost/".$rows[5]."' width='150px' style='width:100%;height:250px;'>";
                echo "<div onclick='document.getElementById('id01').style.display='block'";
                echo "class='w3-button  w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[1]."<a> </a>".$rows[2]."</p>";
                echo "</div>";
                echo "</div>";
                     }
                ?>   
    </div>