<!DOCTYPE html>
<html lang="es">
<head>
    <style>
input[type=text],input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
        

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px 450px;
}
</style>
     <?php include("head.php"); ?>
    <title>Contacto</title>
</head>
<body>
    
    <?php include("slides.php"); ?>
    <header>
         <div class="w3-bar w3-light-grey">
          <a href="index.php" class="w3-bar-item w3-mobile">Inicio</a>
          <a href="artistas.php" class="w3-bar-item w3-button w3-mobile">Artistas</a>
          <a href="contacto.php" class="w3-bar-item w3-button w3-red w3-mobile">Contacto</a>
          <a href="eventos.php" class="w3-bar-item w3-button w3-mobile">Eventos</a>
          <a href="ayuda.php" class="w3-bar-item w3-button  w3-dark-grey w3-right">Ayuda</a>
          <a href="autenticar.php" class="w3-bar-item w3-button w3-dark-grey w3-right">Login</a>
  		</div>
    </header>
    <div  style="margin-left:0%">
          <div class="w3-container w3-red">
            <h1>Formulario de Contacto</h1>
          </div>
         
          </div>
          
    <div class="container">
  <form action="/action_page.php">

    <label for="fname">Nombres</label>
    <input type="text" id="fname"  name="firstname" placeholder="Tus Nombres..">

    <label for="lname">Apellidos</label>
    <input type="text" id="lname" name="lastname" placeholder="Tus Apellidos..">

    <label for="email">Email</label>
    <input type="email" id="lemail" name="txtemail" placeholder="Tu Email..">

    <label for="subject">Asunto</label>
    <textarea id="subject" name="subject" placeholder="Escribe algo.." style="height:200px"></textarea>

    <input type="submit" value="Enviar">

  </form>
</div>
     <footer class="w3-container w3-red">
               <?php include("footer.php"); ?>
                
              </footer>
              
    
    
     <script>
                <?php include("scriptafter.php"); ?>
                </script>
</body>
</html>