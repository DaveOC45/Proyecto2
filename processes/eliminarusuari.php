<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'usuari.php';
//echo $pdo->exec("DELETE FROM tbl_prueba WHERE id_prueba=1");
$stmt = $pdo->prepare("DELETE FROM tbl_usuari WHERE id_usuari=?");
// Bind
$id_usuari = $_GET["id_usuari"];

$stmt->bindParam(1, $id_usuari);
try{
    $stmt->execute();
    header("location:../view/mostrarusuaris.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}