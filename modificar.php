<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';

$stmt = $pdo->prepare("UPDATE tbl_persona SET email=? ,name=?, apellido=?, age=? WHERE id=?");
// Bind
$id=$_POST['id'];
$email=$_POST['email'];
$nombre=$_POST['name'];
$apellido=$_POST['apellido'];
$edad=$_POST['age'];
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $nombre);
$stmt->bindParam(3, $apellido);
$stmt->bindParam(4, $edad);
$stmt->bindParam(5,$id);
// Excecute
$stmt->execute();
header("Location:vista.php");
/*
$persona=new Persona($id,$nombre,$edad);
$stmt = $pdo->prepare("UPDATE tbl_persona SET name=:name, age=:age WHERE id=:id" );
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}


*/