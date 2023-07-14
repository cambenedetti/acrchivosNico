<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesgaleria.css" media="screen" />
    <title>Ingreso Usuarios</title>
</head>

<header>
  <nav>
    <ul>
      <li><a href="INDEX.HTML">Inicio</a></li>
      <li><a href="#">opcion 2</a></li>
      <li><a href="galeria.html">mis fotos</a></li>
      <li><a href="#">opcion 4</a></li>
      <li><a href="recibodatos.php">Contacto</a></li>
    </ul>
  </nav>
  
</header>

<body>
    
  <div class="conform">
    <form action="registrar.php" method="post">
      <label for="nombre">NOMBRE:</label>
      <input type="text" id="NOMBRE" name="nombre" class="form-field"><br><br>

      <label for="apellido">APELLIDO:</label>
      <input type="text" id="APELLIDO" name="apellido" class="form-field" required><br><br>

      <label for="apellido">CORREO:</label>
      <input type="email" id="EMAIL" name="email" class="form-field" required><br><br>

      <label for="comentarios">Comentarios:</label>
      <textarea id="comentarios" name="comentarios" rows="4" cols="50" class="form-field"></textarea>
      
      <input type="submit" value="Enviar" name="register" class="form-field"><br><br>
      <input type="reset" value="Borrar" class="form-field"><br><br>
    </form>
  </div>
  


<?php
/*
Comente esto, porque le agregue una redirección en registrar.php si es que no está definida la variable register.
Si queres descomentar esto, comenta la redirección porque sino la página no va a funcionar. 
*/
  // include("registrar.php");
?>



</body>

<footer>
  <div class="container">
    <p>&copy; 2023 Nicolas Soteras</p>
    <p>Contacto: soteras.nicolas@gmail.com</p>
  </div>
</footer>

</html>