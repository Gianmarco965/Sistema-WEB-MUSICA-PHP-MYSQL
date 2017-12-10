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
                                <h4 class="title">REPORTES</h4>
                                <p class="category">Aqui se muestran los REPORTES que existen en el sistema</p>
                            </div>
                              <?php 
        $sql = "SELECT e.idevento,e.nomevento,e.fechaevento,IF(e.estadoevento=1,'ACTIVO','INACTIVO') as estado,e.portada,a.nombreartista from evento e inner join artista a on a.idartista=e.idartista"; //get article id too
        $results = $db->query($sql); //it makes the query
     ?>
                            <div class="content table-responsive table-full-width">
                              
                                <div class="content all-icons">
                                <div class="row">
                                  
                                          <div class='font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6'>
                                        
                                        <div class="font-icon-detail"><i class="pe-7s-graph2"></i>
                                         <input type="text" readonly >
                                      <button onclick="reporteAlbum()"  class='btn  help-fill btn-fill'>REPORTE ALBUMS </button>
                                      
                                    </div>
                                            
                               
                                            
                                            </div>
                                            
                                       
                                        
                               
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

   
   <script>
     function reporteAlbum()
       {
          $.ajax({
              
        type: "GET",
        contentType: "application/json; charset=utf-8",
        url: "webservice/album.php",
        dataType: "json",
        data: "",
        success: function (data){ 
            console.log(data);
            downloadAlbum(data); 
        },
            error: function (data){console.log('error'); }
            });  
        }
       
       function downloadAlbum(data)
       {
           var doc = new jsPDF();
           doc.setFillColor(255,0,0);
           doc.rect(10,10,190,10,'F');
           
           
            doc.setFontSize(8);
           doc.setTextColor(255,255,255);
                    doc.text("ID",12, 15);
                    doc.text("ALBUM",16, 15);
                    doc.text("AÑO",50, 15);
                    doc.text("VALOR",66, 15);
                    doc.text("DISQUERA",77, 15);
                    doc.text("ARTISTA",150, 15);
           
           
           let contadorz=1;
           let varz=0;
           let multi=0;
           for (var x=1;x<=data.length;x++)
               {
                   
                    multi=(10*(contadorz+varz));
                   

                    doc.setTextColor(0,0,0);
                    doc.text(data[x-1].idalbum.toString(),10, 15+multi);
                    doc.text(data[x-1].nombrealbum.toString(),16, 15+multi);
                    doc.text(data[x-1].anio.toString(),50, 15+multi);
                    doc.text(data[x-1].valor.toString(),66, 15+multi);
                    doc.text(data[x-1].nomdisquera.toString(),77, 15+multi);
                    doc.text(data[x-1].artista.toString(),150, 15+multi);
                   
                   varz++;
                   

               }
           
           

            doc.save('reporte_album.pdf');
           
       }
       
                             
        
    
    </script>
   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
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
