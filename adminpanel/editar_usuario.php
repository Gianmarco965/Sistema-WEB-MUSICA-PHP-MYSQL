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
        $sql = "select *from usuario where idusuario=".$idusuario; //get article id too
        $results = $db->query($sql);
                                    $rows=$results->fetch_row()                                 
                                        //it makes the query
     ?>
                            <div class="header">
                                <h4 class="title">USUARIO - <?php echo $rows[1] ?></h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data"  action="usuario/actualizar_usuario.php">
                                  
                                    
  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>USUARIO</label>
                                                  <input type="text" class="form-control" name="txtnombre" value="<?php echo $rows[1]; ?>" >
                                                  <input type="hidden"  name="idusuario" value="<?php echo $idusuario; ?>">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <?php
                                                $micadena1="select *from rol";
                                                $results1 = $db->query($micadena1);
                                                $seleccionado1="";
                                                ?>
                                                <label>ROL</label>
                                                <select class='form-control' name="cborol" id="">
                                            
                                                <?php
                                                   $seleccionado1=""; 
                                        while($rows1=$results1->fetch_row())
                                        {
                                            if ($rows[0]==$rows1[3])
                                                    {
                                                        $seleccionado1="selected";    
                                                    }
                                            
                                            echo  "<option ".$seleccionado1." value='".$rows1[0]."'>".$rows1[1]."</option>";
                                            
                                            $seleccionado1="";
                                                }
                                                    
                                        ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ESTADO</label>
                                                <select name="cboestado" class="form-control" id="">
                                                 <?php      
                                        if ($rows[4]==1)
                                        {
                                            
                                            echo "<option selected value='1'>ACTIVO</option>";
                                              echo "<option value='0'>INACTIVO</option>";
                                        }
                            else
                            {
                                 echo "<option  value='1'>ACTIVO</option>";
                                              echo "<option selected value='0'>INACTIVO</option>";
                            }
                                        
                                            
                                                
                                        ?>
                                           </select>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>CONTRASEÑA</label>
                                                  <input type="text" class="form-control" name="txtpass" value="<?php echo $rows[2]; ?>" >
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">GUARDAR USUARIO</button>
                          
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
