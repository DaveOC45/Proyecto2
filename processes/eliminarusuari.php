<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'usuari.php';
$id_usuari = $_GET["id_usuari"];
$tipus_usuari = $_GET["tipus_usuari"];
$seleccionar=$pdo->prepare("SELECT * FROM tbl_usuari where id_usuari = ? and tipus_usuari = ?");
$seleccionar->execute();
if($tipus_usuari=="cambrer"){


$stmt = $pdo->prepare("DELETE FROM tbl_usuari WHERE id_usuari=?");
// Bind


$stmt->bindParam(1, $id_usuari);
try{
    $stmt->execute();
    header("location:../view/mostrarusuaris.php");
}catch(PDOException $e){
    echo  $e->getMessage();
}
}else{
    header("location:../view/mostrarusuaris.php");
}