<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php"); ?>
    <title>Eventos</title>
</head>
<body>
 
  <?php include("slides.php"); ?>
  <header>
      <div class="w3-bar w3-light-grey">
          <a href="index.php" class="w3-mobile w3-bar-item w3-mobile">Inicio</a>
          <a href="artistas.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Artistas</a>
          <a href="contacto.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Contacto</a>
          <a href="eventos.php" class="w3-mobile w3-bar-item w3-button w3-red w3-mobile">Eventos</a>
          <a href="ayuda.php" class="w3-mobile w3-bar-item w3-button  w3-dark-grey w3-right">Ayuda</a>
          <a href="autenticar.php" class="w3-mobile w3-bar-item w3-button w3-dark-grey w3-right">Login</a>
  		</div>
  </header>
  <div  style="margin-left:0%">
          <div class="w3-container w3-red">
            <h1>Eventos</h1>
          </div>
          <div class="w3-container">
          <h2>Nuevos Eventos</h2>
          </div>
          </div>
  
   <?php include("albumevento_detalle.php"); ?>
  
   <footer class="w3-container w3-red">
               <?php include("footer.php"); ?>
                
              </footer>
              
  
   <script>
                <?php include("scriptafter.php"); ?>
                </script>
</body>
</html>