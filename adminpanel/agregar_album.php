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
                                <h4 class="title">AGREGAR NUEVO ALBUM</h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="album/agregar_album.php">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                                <input type="text" class="form-control" name="txtnombre"  maxlength="100" placeholder="Escriba el nombre del album" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Año</label>
                                                <input type="text" name="txtanio" class="form-control"  maxlength="4" placeholder="Escriba el año del album" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Valor</label>
                                                <input type="text"  name="txtvalor" class="form-control" maxlength="4" placeholder="Escriba el valor del album" value="" required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                               <?php
                                                $micadena="select *from disquera";
                                                $results = $db->query($micadena);
                                                ?>
                                                <label>Disquera</label>
                                                <select class="form-control" name="cbodisquera" id="" required>
                                                     <?php
                                        while($rows=$results->fetch_row())
                                        {
                                            echo  "<option value='".$rows[0]."'>".$rows[1]."</option>";
                                                }
                                        ?>
                                                </select>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <?php
                                                $micadena="select *from artista";
                                                $results = $db->query($micadena);
                                                ?>
                                                <label>Artista</label>
                                                <select class="form-control" name="cboartista" id="" required>
                                                   <?php
                                        while($rows=$results->fetch_row())
                                        {
                                            echo  "<option value='".$rows[0]."'>".$rows[1].' '.$rows[2]."</option>";
                                                }
                                        ?>
                                                </select>
                                               
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
                       
                                    <button type="submit" class="btn btn-info btn-fill pull-right">GUARDAR ALBUM</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                    </a>
                                </div>
                                <p class="description text-center"> <br>
                                                    Clic en la foto para agregar una
                                                    Imagen del Artista 
                                </p>
                            </div>
                            <hr>
                            
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
