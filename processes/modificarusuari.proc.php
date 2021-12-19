<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'usuari.php';
$id_usuari=$_POST["id_usuari"];
$nom_usuari=$_POST["nom_usuari"];
$cognom_usuari=$_POST["cognom_usuari"];
$contra_usuari=$_POST["contra_usuari"];
$tipus_usuari=$_POST["tipus_usuari"];
$seleccionar=$pdo->prepare("SELECT * FROM tbl_usuari where id_usuari = ? and tipus_usuari = ?");
$seleccionar->execute();

if($tipus_usuari!="cambrer"){
$stmt = $pdo->prepare("UPDATE tbl_usuari SET nom_usuari=?,cognom_usuari=?,contra_usuari=?,tipus_usuari=? WHERE id_usuari = ?");


$stmt->bindParam(1,$nom_usuari);
$stmt->bindParam(2,$cognom_usuari);
$stmt->bindParam(3,$contra_usuari);
$stmt->bindParam(4,$tipus_usuari);
$stmt->bindParam(5,$id_usuari);

$stmt->execute();

header('location: ../view/mostrarusuaris.php');
}else{
    header("location:../view/mostrarusuaris.php");
}



