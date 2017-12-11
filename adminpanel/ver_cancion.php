<?php
   include('../session.php');
?>
<!Doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Panel de Administrador</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?php
   include('beforescripts.php');
    ?>
  
</head>
<body>

<div class="wrapper">
   
   <?php
   include('sidebar.php');
    ?>

    <div class="main-panel">
		
        <?php
            include('navigation.php');
        ?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <?php 
                                    $idcancion=$_REQUEST["idcancion"];
        $sql = "select c.idcancion,a.nombrealbum,c.nombre,c.genero,c.portada,c.mp3,c.mp4 from cancion c inner join album a on a.idalbum=c.idalbum where c.idcancion=".$idcancion; //get article id too
        $results = $db->query($sql);
                                    $rows=$results->fetch_row();                                 
                                        //it makes the query
     ?>
                            <div class="header">
                                <h4 class="title">CANCION - <?php echo $rows[2] ?></h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="artista/agregar_artista.php">
                                  
                                    
  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                          <?php  echo "<label class='form-control'>".$rows[2]."</label>"
                                        ?>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Genero</label>
                                                 <?php  echo "<label class='form-control'>".$rows[3]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Album</label>
                                                 <?php  echo "<label class='form-control'>".$rows[1]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                       
                                    </div>

                                  
                                    
                                    <div class="row">
                                         <div class="col-md-8">
                                            <div class="form-group">
                                                <label>MP4</label>
                                           <?php  echo "<label class='form-control'>".$rows[6]."</label>"
                                        ?>
                                             <iframe width="420"  height="315"
                                    src="<?php echo $rows[6]; ?>">
                                    </iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Foto</label>
                                            <?php  echo "<img  height='250px' src='http://localhost/".$rows[4]."'/>"
                                        ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                     <div class="row">
                                       <div class="col-md-4">
                                            <div class="form-group">
                                                <label>MP3</label>
                                           <?php  echo "<label class='form-control'>".$rows[5]."</label>"
                                        ?>
                                           <audio controls>
                                              <source  src="http://localhost/audio/<?php echo $rows[5]; ?>" type="audio/mpeg">    
                                            Your browser does not support the audio element.
                                            </audio>
                                            </div>
                                        </div>
    
                                    </div>
                                    
                       
                                    <a href="editar_cancion.php?idcancion=<?php echo $idcancion ?>" class="btn btn-info btn-fill pull-right">EDITAR CANCION</a>

                                    <div class="clearfix"></div>
                                </form>
                              
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>

                </div>
            </div>
        </div>
        <?php
   include('footer.php');
?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
s