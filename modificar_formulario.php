<?php
 
include_once 'cabecera.html';

include 'config.php';
include 'conexion.php';
include 'persona.php';

 $id=$_GET['id'];
 $stmt = $pdo->prepare("select * from tbl_persona WHERE id=$id");
 $stmt->execute();
 $result = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>
 <form action='modificar.php' method='post'>
    <input type='hidden' name='id' value=<?php echo $result['id']?>>
    <p>Nombre: <input type='text' name='name' value=<?php echo $result['name']?>></p>
    <p>Apellido: <input type='text' name='apellido' value=<?php echo $result['apellido']?>></p>
    <p>Edad: <input type='text' name='age' value=<?php echo $result['age']?>></p>
    <input type='submit' value='Actualizar'>
</form>
