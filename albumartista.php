<?php 
include('config.php');

$xpagina = 5;

$pagina=$_REQUEST["pagina"];

if (is_numeric($pagina)==false)
{
    header("location: index.php");
}
$empezar_desde = ($pagina-1) * $xpagina;


$sql = "SELECT * from artista"; //get article id too
        $results = $db->query($sql);
$total_registros = mysqli_num_rows(mysqli_query($db,$sql));
$total_paginas = ceil($total_registros / $xpagina);
$consulta_resultados = mysqli_query($db, "SELECT * from artista LIMIT" .$empezar_desde.",". $xpagina."");
$sql1="SELECT * from artista LIMIT " .$empezar_desde.','. $xpagina."";

$results1=$db->query($sql1);



?>
        <div class="w3-section w3-white w3-container w3-mobile">     
                 <?php
                while($rows=$results1->fetch_row())
                                        {
                                              
                echo "<div class='w3-col s2 w3-mobile' >";
                echo "<img src='http://localhost/".$rows[5]."' width='150px'  style='width:100%;height:250px;'>";
                echo "<a href='detalle_artista.php?idartista=".$rows[0]."' ";
                echo "class='w3-button w3-blue w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[1].' '.$rows[2]."</p>";
                echo "</a>";
                echo "</div>";
                     }
            
            echo "<div class='w3-bar w3-center'>";
            for ($i=1; $i<=$total_paginas; $i++) {
	//En el bucle, muestra la paginación
	echo "<a class='w3-button' href='?pagina=".$i."'>".$i."</a> | ";
                
            };
            echo "</div>";
            
            
                ?>
                
    </div>
    