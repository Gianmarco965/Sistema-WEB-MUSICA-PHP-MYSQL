<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php"); ?>
</head>
<body>
    
    <?php include("slides.php"); ?>
    <header>
         <div class="w3-bar w3-light-grey">
          <a href="index.php" class="w3-mobile w3-bar-item w3-mobile">Inicio</a>
          <a href="artistas.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Artistas</a>
          <a href="contacto.php" class="w3-mobile w3-bar-item w3-button w3-red w3-mobile">Contacto</a>
          <a href="eventos.php" class="w3-mobile w3-bar-item w3-button w3-mobile">Eventos</a>
          <a href="ayuda.php" class="w3-mobile w3-bar-item w3-button  w3-dark-grey w3-right">Ayuda</a>
          <a href="autenticar.php" class="w3-mobile w3-bar-item w3-button w3-dark-grey w3-right">Login</a>
  		</div>
    </header>
    <div  style="margin-left:0%">
          <div class="w3-container  w3-red">
            <h1>Formulario de Contacto</h1>
          </div>
          </div>
          
          <div class="w3-row">
           <div class="w3-col w3-padding s6 w3-mobile">
      <img src="img/artista1.jpg" width="100%" height="440px" alt="">
        
    </div>
    <div class="w3-col s6 w3-yellow w3-padding w3-mobile">
  <form  action="/action_page.php">

    <label for="fname">Nombres</label>
    <input class="w3-input" type="text" id="fname"  name="firstname" placeholder="Tus Nombres..">

    <label for="lname">Apellidos</label>
    <input  class="w3-input" type="text" id="lname" name="lastname" placeholder="Tus Apellidos..">

    <label for="email">Email</label>
    <input class="w3-input"  type="email" id="lemail" name="txtemail" placeholder="Tu Email..">

    <label for="subject">Asunto</label>
    <textarea class="w3-input" id="subject" name="subject" placeholder="Escribe algo.." style="height:200px"></textarea>

    <input class="w3-button w3-green" type="submit" value="Enviar">

  </form>
</div>

   
       </div>    
     <footer class="w3-container w3-red">
               <?php include("footer.php"); ?>
                
              </footer>
              
     <script>
                <?php include("scriptafter.php"); ?>
                </script>
</body>
</html>