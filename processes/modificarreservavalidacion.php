<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'reservas.php';
$id_reserva=$_POST["id_reserva"];
$nom_reserva=$_POST["nom_reserva"];
$data_reserva=$_POST["data_reserva"];
$inici_reserva=$_POST["inici_reserva"];

$fecha = getdate();
$dia = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
$hora = $fecha['hours'].":00:00";
if($data_reserva < $dia && $inici_reserva<$hora){
    
    session_start();
    $_SESSION['error']=1;
    header("location: ./modificarreserva-formcambrer.php?id_reserva={$id_reserva}&error2=error");
    }else{
        $entrada=strtotime('2 hour',strtotime($inici_reserva));
        $salida = date('H:i',$entrada);
$stmt = $pdo->prepare("UPDATE tbl_reserva SET nom_reserva=?,data_reserva=?,inici_reserva=?,data_alliberament_reserva=? WHERE id_reserva = ?");

$stmt->bindParam(1,$nom_reserva);   
$stmt->bindParam(2,$data_reserva);
$stmt->bindParam(3,$inici_reserva);
$stmt->bindParam(4,$salida);
$stmt->bindParam(5,$id_reserva);


$stmt->execute();

header('location: ../view/reservas.php');
    }




