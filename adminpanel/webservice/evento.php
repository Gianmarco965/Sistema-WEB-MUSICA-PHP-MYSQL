<?php

      include('../../session.php');

$query="SELECT e.idevento,e.nomevento,e.fechaevento,IF(e.estadoevento,'ACTIVO','INACTIVO') as 'estado',CONCAT(a.nombreartista,' ',a.apellidoartista) as 'artista' FROM evento e inner join artista a on a.idartista=e.idartista";

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