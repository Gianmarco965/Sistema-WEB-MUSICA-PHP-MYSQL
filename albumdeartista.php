<!DOCTYPE html>
<html lang="es">

<head>
   <?php include("head.php"); ?>
  <title>VIDEOWEB</title>
</head>

<body class="w3-white">
        <?php include("slides.php"); ?>
       
        <header>
        <div class="w3-bar w3-light-grey">
          <a href="index.php" class="w3-mobile w3-bar-item w3-mobile">Inicio</a>
           <a href="nosotros.php" class="w3-mobile w3-bar-item w3-button">Nosotros</a>
          <a href="artistas.php" class="w3-mobile w3-bar-item w3-red w3-button w3-mobile">Artistas</a>
          <a href="contacto.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Contacto</a>
          <a href="eventos.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Eventos</a>
          <a href="ayuda.php" class="w3-mobile w3-bar-item w3-button  w3-dark-grey w3-right">Ayuda</a>
          <a href="autenticar.php" class="w3-mobile w3-bar-item w3-button w3-dark-grey w3-right">Login</a>
  		</div>
    </header>
      
        
       <?php include("albumdeartista_detalle.php"); ?>
       
        <footer class="w3-container w3-red">
               <?php include("footer.php"); ?>
                
              </footer>

              <!-- The Modal -->
              <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <header class="w3-container w3-teal"> 
                    <span onclick="document.getElementById('id01').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h2>ALBUMS</h2>
                  </header>
                  <div class="w3-container">
                    <p class="w3-text-black">Descripcion..</p>
                    <p class="w3-text-black">Descripcion..</p>
                  </div>
                  <footer class="w3-container w3-teal">
                    <p>Artista - @</p>
                  </footer>
                </div>
              </div>


       <script>
        function onClick()
           {
            document.getElementById('id01').style.display='block';
               
           }
           
           
           
    </script>
        <script>
                <?php include("scriptafter.php"); ?>
                </script>
</body>
</html>