<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'reservas.php';
$stmt = $pdo->prepare("DELETE FROM tbl_reserva WHERE id_reserva=?");
$id_reserva = $_GET["id_reserva"];

$stmt->bindParam(1, $id_reserva);
try{
    $stmt->execute();
    header("location: ../view/reservas.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}