<?php

      include('../../session.php');

$query="select *from artista";

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