<!DOCTYPE html>
<html lang="es">

<head>
   <?php include("head.php"); ?>
  <title>VIDEOWEB</title>
</head>

<body class="w3-white">
        <?php include("slides.php"); ?>
       
        <header> 
        <?php include("header.php"); ?>
       
        

       </header>
        <?php include("bartitle.php"); ?>
        
       <?php include("album.php"); ?>
       
        <footer class="w3-container w3-red">
               <?php include("footer.php"); ?>
                
              </footer>

              <!-- The Modal -->
              <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <header class="w3-container w3-teal"> 
                    <span onclick="document.getElementById('id01').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <h2>ARTISTA</h2>
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
                <?php include("scriptafter.php"); ?>
                </script>
</body>
</html>