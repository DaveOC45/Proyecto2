<?php
// 1. Conexión con la base de datos
include '../services/conexion.php';

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$stmt = $pdo->prepare("SELECT * FROM tbl_usuari WHERE nom_usuari=? and contra_usuari=MD5(?)");

$stmt->bindParam(1, $username);
$stmt->bindParam(2, $password);
$stmt->execute();

$comprobar = $stmt->rowCount();

if ($comprobar == 1) {

    // username y password correctos?

    session_start();

    $tipusuari = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['username']=$username;

    if ($tipusuari['tipus_usuari'] == "manteniment") {
        header("location: ../view/home.php");
    } else {
        header("location: ../view/inici.php");
    };

} else {

    // vuelta al login

    header("location: ../view/login.php");

};
?>
