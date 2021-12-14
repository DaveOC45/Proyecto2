<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'taula.php';
//echo $pdo->exec("DELETE FROM tbl_prueba WHERE id_prueba=1");
$stmt = $pdo->prepare("DELETE FROM tbl_taula WHERE num_taula=?");
// Bind
$num_taula = $_GET["num_taula"];

$stmt->bindParam(1, $num_taula);
try{
    $stmt->execute();
    header("location:../view/mostrartaules.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}