<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'sala.php';

$nom_sala=$_POST["nom_sala"];
$sala=new Sala(null,$nom_sala);
$stmt = $pdo->prepare("INSERT INTO tbl_sala (id_sala, nom_sala) VALUES (:id_sala,:nom_sala)" );
try{
    if($stmt->execute((array) $sala)){
        echo 'bien';
        header("location:../view/mostrarsales.php");
    }else{ echo 'mal';}
}catch(PDOException $e){
    echo 'mal manito';
   echo  $e->getMessage();
}





