<?php
include '../services/config.php';
include '../services/conexion.php';

$img=$_FILES['img'];
$id_sala=$_POST['id_sala'];
$foto=$img['name'];


$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "El archivo ". basename( $_FILES["img"]["name"]). " Se subio correctamente";
} else {
    echo "Error al cargar el archivo";
}
$subirimatge = $pdo->prepare("INSERT INTO tbl_sala (img)
    VALUES (?)");
    
    $subirimatge->bindParam(1, $foto);
    
    $subirimatge->execute();
    
    header("location:../view/mostrarsales.php");