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
                <?php
                            $idartista=$_REQUEST["idartista"];
                            $micadena="select *from artista where idartista=".$idartista;
                            $results = $db->query($micadena);
                            $rows1=$results->fetch_row()
                ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">EDITAR ARTISTA</h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="artista/actualizar_artista.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                                <input type="text" class="form-control" name="txtnombre" placeholder="Escriba los nombres del artista" value="<?php echo $rows1[1] ?>" required>
                                                <input type="hidden" class="form-control" name="idartista" value="<?php echo $idartista ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellidos</label>
                                                <input type="text" name="txtapellido" class="form-control" placeholder="Escriba los apellidos del artista" value="<?php echo $rows1[2] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nacionalidad</label>
                                                <input type="text"  name="txtnacionalidad" class="form-control" placeholder="Escriba la nacionalidad del artista" value="<?php echo $rows1[3]?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento</label>
                                                <input type="date"  name="txtfecha" class="form-control" placeholder="Country" value="<?php echo $rows1[4] ?>" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file"  name="txtfoto" class="form-control" accept="image/*" required >
                                            </div>
                                        </div>
                                        
                                    </div>
                       
                                    <button type="submit" class="btn btn-info btn-fill pull-right">GUARDAR ARTISTA</button>
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
