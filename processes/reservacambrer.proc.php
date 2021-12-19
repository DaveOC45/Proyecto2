<?php
require_once '../services/conexion.php';

$nom_reserva=$_POST["nom_reserva"];
$num_taula=$_POST['num_taula'];
$data_reserva=$_POST['data_reserva'];
$inici_reserva=$_POST['inici_reserva'];


$fecha = getdate();
$dia = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
$hora = $fecha['hours'].":00:00";
//hora antes
if($data_reserva == $dia && $inici_reserva<$hora){
    
    session_start();
    $_SESSION['error']=1;
    header("location: ./reserva-formcambrer.php?num_taula={$num_taula}&error2=error");
}else{
$entrada=strtotime('2 hour',strtotime($inici_reserva));
$salida = date('H:i',$entrada);
//hora antes 
$horaantes=strtotime('-1 hour',strtotime($inici_reserva));
$horaant = date('H:i',$horaantes);
//hora despues
$horadespues=strtotime('+1 hour',strtotime($inici_reserva));
$horadesp = date('H:i',$horadespues);

$stmt1=$pdo->prepare("SELECT r.id_reserva,r.nom_reserva,r.num_taula, r.data_reserva, r.inici_reserva, r.data_alliberament_reserva, t.id_sala
FROM `tbl_reserva` r 
INNER JOIN tbl_taula t ON r.num_taula = t.num_taula
INNER JOIN tbl_sala s ON t.id_sala = s.id_sala
WHERE r.num_taula = '$num_taula' AND r.data_reserva = '$data_reserva' AND r.inici_reserva = '$inici_reserva'");
$stmt1->execute();
$reserva1=$stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2=$pdo->prepare("SELECT r.id_reserva,r.nom_reserva,r.num_taula, r.data_reserva, r.inici_reserva, r.data_alliberament_reserva, t.id_sala
FROM `tbl_reserva` r 
INNER JOIN tbl_taula t ON r.num_taula = t.num_taula
INNER JOIN tbl_sala s ON t.id_sala = s.id_sala
WHERE r.num_taula = '$num_taula' AND r.data_reserva = '$data_reserva' AND r.inici_reserva = '$horaant'");
$stmt2->execute();
$reserva2=$stmt2->fetchAll(PDO::FETCH_ASSOC); 

$stmt3=$pdo->prepare("SELECT r.id_reserva,r.nom_reserva,r.num_taula, r.data_reserva, r.inici_reserva, r.data_alliberament_reserva, t.id_sala
FROM `tbl_reserva` r 
INNER JOIN tbl_taula t ON r.num_taula = t.num_taula
INNER JOIN tbl_sala s ON t.id_sala = s.id_sala
WHERE r.num_taula = '$num_taula' AND r.data_reserva = '$data_reserva' AND r.inici_reserva = '$horadesp'");
$stmt3->execute();
$reserva3=$stmt3->fetchAll(PDO::FETCH_ASSOC); 

if(!empty($reserva1)){
    session_start();
    $_SESSION['error']=1;
    header("location: ./reserva-formcambrer.php?num_taula={$num_taula}&error=error");
}elseif(!empty($reserva2)){
    session_start();
    $_SESSION['error']=1;
    header("location: ./reserva-formcambrer.php?num_taula={$num_taula}&error=error");
}elseif(!empty($reserva3)){
    session_start();
    $_SESSION['error']=1;
    header("location: ./reserva-formcambrer.php?num_taula={$num_taula}&error=error");
}else{
    $stmt = $pdo->prepare("INSERT INTO tbl_reserva (data_reserva, num_taula, inici_reserva, data_alliberament_reserva, nom_reserva) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $data_reserva);
    $stmt->bindParam(2, $num_taula);
    $stmt->bindParam(3, $inici_reserva);
    $stmt->bindParam(4, $salida);
    $stmt->bindParam(5, $nom_reserva);
    $stmt->execute();

    header("location: ../view/inici.php");
}

 }