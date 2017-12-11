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
                            <div class="header">
                                <h4 class="title">ARTISTA</h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="artista/agregar_artista.php">
                                   <?php 
                                    $idartista=$_REQUEST["idartista"];
        $sql = "SELECT *from artista where idartista=".$idartista; //get article id too
        $results = $db->query($sql);
                                    $rows=$results->fetch_row()
                                    
                                    //it makes the query
     ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                          <?php  echo "<label class='form-control'>".$rows[1].' '.$rows[2]."</label>"
                                        ?>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nacionalidad</label>
                                                 <?php  echo "<label class='form-control'>".$rows[3]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                       
                                    </div>

                                   

                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento</label>
                                                <?php  echo "<label class='form-control'>".$rows[4]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Foto</label>
                                            <?php  echo "<img  height='250px' src='http://localhost/".$rows[5]."'/>"
                                        ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                       
                                    <a href="editar_artista.php?idartista=<?php echo $rows[0] ?>" class="btn btn-info btn-fill pull-right">EDITAR ARTISTA</a>
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
