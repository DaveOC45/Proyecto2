<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'usuari.php';

$nom_usuari=$_POST["nom_usuari"];
$cognom_usuari=$_POST["cognom_usuari"];
$contra_usuari=$_POST["contra_usuari"];
$tipus_usuari=$_POST["tipus_usuari"];
$usuari=new Evento(null,$nom_usuari,$cognom_usuari,$contra_usuari,$tipus_usuari);
$stmt = $pdo->prepare("INSERT INTO tbl_usuari (id_usuari,nom_usuari,cognom_usuari,contra_usuari,tipus_usuari) VALUES (:id_usuari,:nom_usuari,:cognom_usuari,:contra_usuari,:tipus_usuari)" );
try{
    $pdo->beginTransaction();
    if($stmt->execute((array) $usuari)){
        echo 'bien';
        header("location:../view/mostrarusuaris.php");
    }else{
        echo 'mal, ese usuario ya está creado';
        header("location:../view/mostrarusuaris.php");
    }
    $pdo->commit();
}catch(PDOException $e){
    $pdo->rollBack();
    echo 'mal manito';
   echo  $e->getMessage();
}