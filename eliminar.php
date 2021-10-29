<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';

echo $pdo->exec("DELETE FROM tbl_persona WHERE id=1");
$stmt = $pdo->prepare("DELETE FROM tbl_persona WHERE id=?");
// Bind
$id = $_GET['id'];

$stmt->bindParam(1, $id);
$stmt->execute();
header("Location:vista.php");