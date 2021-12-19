<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'taula.php';
$num_taula=$_POST["num_taula"];
$num_llocs_taula=$_POST["num_llocs_taula"];
$id_sala=$_POST["id_sala"];
$stmt = $pdo->prepare("UPDATE tbl_taula SET num_taula=?,num_llocs_taula=?,id_sala=? WHERE num_taula = ?");


$stmt->bindParam(1,$num_taula);
$stmt->bindParam(2,$num_llocs_taula);
$stmt->bindParam(3,$id_sala);
$stmt->bindParam(4,$num_taula);

$stmt->execute();

header('location: ../view/mostrartaules.php');




