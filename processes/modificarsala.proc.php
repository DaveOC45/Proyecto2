<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'sala.php';
$id_sala=$_POST["id_sala"];
$nom_sala=$_POST["nom_sala"];
$stmt = $pdo->prepare("UPDATE tbl_sala SET nom_sala=? WHERE id_sala = ?");


$stmt->bindParam(1,$nom_sala);
$stmt->bindParam(2,$id_sala);

$stmt->execute();

header('location: ../view/mostrarsales.php');




