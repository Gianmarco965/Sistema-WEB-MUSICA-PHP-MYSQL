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
                                    $idusuario=$_REQUEST["idusuario"];
        $sql = "SELECT u.idusuario,u.login,u.pass,r.nombrerol,IF(u.activo=1,'ACTIVO','INACTIVO') as activo FROM usuario u inner join rol r on r.idrol=u.idrol where u.idusuario=".$idusuario; //get article id too
        $results = $db->query($sql);
                                    $rows=$results->fetch_row()                                 
                                        //it makes the query
     ?>
                            <div class="header">
                                <h4 class="title">USUARIO - <?php echo $rows[1] ?></h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="artista/agregar_artista.php">
                                  
                                    
  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>USUARIO</label>
                                          <?php  echo "<label class='form-control'>".$rows[1]."</label>"
                                        ?>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ROL</label>
                                                 <?php  echo "<label class='form-control'>".$rows[3]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ESTADO</label>
                                                 <?php  echo "<label class='form-control'>".$rows[4]."</label>"
                                        ?>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <a href="editar_usuario.php?idusuario=<?php echo $idusuario ?>" class="btn btn-info btn-fill pull-right">EDITAR USUARIO</a>
                                     <a href="cancion_album.php?idalbum=<?php echo $idusuario ?>" class="btn btn-fill">DESACTIVAR USUARIO</a>
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
