<?php 
include_once 'cabecera.html';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola</title>
    </head>
    <body>
        <form action="insertar.php" method="post">
            <p>Email: <input type="email" name="email"></p>
            <p>Nombre: <input type="text" name="name"></p>
            <p>Apellido: <input type="text" name="apellido"></p>
            <p>Edad: <input type="text" name="age"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        
        
  
    </body>
</html>