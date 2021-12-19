<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'reservas.php';
//echo $pdo->exec("DELETE FROM tbl_prueba WHERE id_prueba=1");
$stmt = $pdo->prepare("DELETE FROM tbl_reserva WHERE id_reserva=?");
// Bind
$id_reserva = $_GET["id_reserva"];

$stmt->bindParam(1, $id_reserva);
try{
    $stmt->execute();
    header("location:../view/historial.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}