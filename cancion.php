<?php 
include('config.php');

$idalbum=$_REQUEST["idalbum"];


$sql = "SELECT * FROM cancion where idalbum=".$idalbum; //get article id too
$sql1="select *from album where idalbum=".$idalbum;
        $results = $db->query($sql);
        $results1=$db->query($sql1);
        $rows1=$results1->fetch_row()
?>
       
         <div  style="margin-left:0%">
          <div class="w3-container w3-red">
            <h1>Bienvenido</h1>
          </div>
          <div class="w3-container">
          <h2>MUSICAS ALBUM - <?php echo $rows1[1]; ?> </h2>
          </div>
          </div>
       
        <div class="w3-section w3-white w3-container">     
                 <?php
                                        while($rows=$results->fetch_row())
                                        {
                                              
                echo "<div class='w3-col s2 w3-mobile' style='width:20%'>";
                echo "<img src='http://localhost/".$rows[4]."' width='150px' style='width:100%;'>";
                echo "<a href='play_music.php?idcancion=".$rows[0]."'";
                echo "class='w3-button w3-blue w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[2]."</p>";
                echo "</a>";
                echo "</div>";
                     }
                ?>   
    </div>