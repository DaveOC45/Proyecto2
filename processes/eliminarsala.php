<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'sala.php';
//echo $pdo->exec("DELETE FROM tbl_prueba WHERE id_prueba=1");
$stmt = $pdo->prepare("DELETE FROM tbl_sala WHERE id_sala=?");
// Bind
$id_sala = $_GET["id_sala"];

$stmt->bindParam(1, $id_sala);
try{
    $stmt->execute();
    header("location:../view/mostrarsales.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}