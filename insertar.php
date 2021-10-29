<?php
include 'config.php';
include 'conexion.php';
include_once 'persona.php';
$name=$_POST['name'];
$age=$_POST['age'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$persona=new Persona(null,$name,$age,$apellido,$email);
$stmt = $pdo->prepare("INSERT INTO tbl_persona(id, name, age,apellido,email) VALUES (:id, :name, :age,:apellido,:email)" );
$stmt->execute((array) $persona);
header('Location: vista.php');
   