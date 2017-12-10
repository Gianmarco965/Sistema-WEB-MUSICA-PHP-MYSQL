<?php

      include('../../session.php');

$query="select a.idalbum,a.nombrealbum,a.anio,a.valor,d.nomdisquera,CONCAT(r.nombreartista,' ',r.apellidoartista) as 'artista',a.portada from album a inner JOIN disquera d on d.iddisquera=a.iddisquera inner JOIN artista r on r.idartista=a.idartista";

      if(mysqli_query($db, $query))
      {
          $result=mysqli_query($db, $query);
          $rawdata = array();
          $i=0;
          
          while($row = mysqli_fetch_array($result))
            {
                $rawdata[$i] = $row;
                $i++;
            }
          echo json_encode($rawdata);
          
          
      } 
    else
      {
    echo "ERROR: Could not able to execute";
      }


   

?>