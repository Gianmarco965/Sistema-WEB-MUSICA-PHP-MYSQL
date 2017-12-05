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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <form action="agregar_evento.php">
                                   <button type="submit" class="btn btn-info btn-fill pull-right">Agregar EVENTOS <i class="pe-7s-folder"></i></button>
                                </form>
                                <h4 class="title">EVENTOS</h4>
                                <p class="category">Aqui se muestran los EVENTOS que existen en el sistema</p>
                            </div>
                              <?php 
        $sql = "SELECT e.idevento,e.nomevento,e.fechaevento,IF(e.estadoevento=1,'ACTIVO','INACTIVO') as estado,e.portada,a.nombreartista from evento e inner join artista a on a.idartista=e.idartista"; //get article id too
        $results = $db->query($sql); //it makes the query
     ?>
                            <div class="content table-responsive table-full-width">
                              
                                <div class="content all-icons">
                                <div class="row">
                                  
                                      <?php
                                        while($rows=$results->fetch_row())
                                        {
                                           echo "<div class='font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6'>";
                                            echo "<div class='font-icon-detail'>";
                                            echo "<img src=http://localhost/".$rows[4]." width='150px'>";
                                            
                                            echo "<input type='text' value=".$rows[1].">";
                                            echo "<input type='text' value='Fecha: ".$rows[2]."'>";
                                             echo "<input type='text' value='Estado: ".$rows[3]."'>";
                                            echo "<input type='text' value='Artista: ".$rows[5]."'>";
                                            echo "<button type='submit' class='btn help-block btn-fill'>VER EVENTO </button>";
                                            echo " </div>";
                                            
                                            echo "</div>";
                                            
                                        }
                                        ?>
                                        
                               
                                </div>


                            </div>
                                        
                
                            </div>
                        </div>
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
