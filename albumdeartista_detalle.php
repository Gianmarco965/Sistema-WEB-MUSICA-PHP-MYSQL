<?php 
include('config.php');


$xpagina = 5;

$pagina=$_REQUEST["pagina"];
$idartista=$_REQUEST["idartista"];

if (is_numeric($pagina)==false)
{
    header("location: index.php?pagina=1");
}
$empezar_desde = ($pagina-1) * $xpagina;


$sql = "SELECT a.idalbum,a.nombrealbum,a.anio,a.valor,d.nomdisquera,CONCAT(r.nombreartista,' ',r.apellidoartista) as 'artista',a.portada FROM  album a inner join artista r on r.idartista=a.idartista inner join disquera d on d.iddisquera=a.iddisquera"; //get article id too

        $results = $db->query($sql);
$total_registros = mysqli_num_rows(mysqli_query($db,$sql));
$total_paginas = ceil($total_registros / $xpagina);
$consulta_resultados = mysqli_query($db, "SELECT a.idalbum,a.nombrealbum,a.anio,a.valor,d.nomdisquera,CONCAT(r.nombreartista,' ',r.apellidoartista) as 'artista',a.portada FROM  album a inner join artista r on r.idartista=a.idartista inner join disquera d on d.iddisquera=a.iddisquera where r.idartista=".$idartista."  LIMIT" .$empezar_desde.",". $xpagina."");
$sql1="SELECT a.idalbum,a.nombrealbum,a.anio,a.valor,d.nomdisquera,CONCAT(r.nombreartista,' ',r.apellidoartista) as 'artista',a.portada FROM  album a inner join artista r on r.idartista=a.idartista inner join disquera d on d.iddisquera=a.iddisquera where r.idartista=".$idartista." LIMIT " .$empezar_desde.','. $xpagina."";

$results1=$db->query($sql1);

?>
        <div class="w3-section w3-white w3-container w3-mobile">     
                 <?php
             if($results1->num_rows === 0)
    {
        echo '<p>No se Encontraron Albumes para este artista</p>';
        echo "<a class='w3-button w3-blue' href='detalle_artista.php?pagina=1&idartista=".$idartista."' >RETROCEDER</a>";
                 
    }else
     {
        
            
        while($rows=$results1->fetch_row())
          {
                                          
                                     
                                          
                                     
                                            
                                            
                                            
                echo "<div class='w3-col s2 w3-mobile' >";
                echo "<img src='http://localhost/".$rows[6]."' width='150px' style='width:100%;'>";
                echo "<a href='album_cancion.php?idalbum=".$rows[0]."'";
                echo "class='w3-button w3-blue w3-block w3-container w3-center' >";                       
                echo "<p>".$rows[1]."</p>";
                echo "</a>";
                echo "</div>";
                                           }
                  }
            
             echo "<div class='w3-bar w3-center'>";
            for ($i=1; $i<=$total_paginas; $i++) {
	//En el bucle, muestra la paginación
	echo "<a class='w3-button' href='?pagina=".$i."'>".$i."</a> | ";
                
            };
            echo "</div>";
            
                ?>   
    </div>