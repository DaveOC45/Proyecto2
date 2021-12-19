<?php 
include '../services/config.php';
include '../services/conexion.php';
include 'taula.php';

$num_taula=$_POST["num_taula"];
$num_llocs_taula=$_POST["num_llocs_taula"];
$id_sala=$_POST["id_sala"];
$taula=new Taula($num_taula,$num_llocs_taula,$id_sala,$estat_taula);
$stmt = $pdo->prepare("INSERT INTO tbl_taula (num_taula,num_llocs_taula,id_sala) VALUES (:num_taula,:num_llocs_taula,:id_sala)" );
try{
    if($stmt->execute((array) $taula)){
        echo 'bien';
        header("location:../view/mostrartaules.php");
    }else{ echo 'mal';}
}catch(PDOException $e){
    echo 'mal manito, no funsionó D:';
   echo  $e->getMessage();
}