<?php 
session_start();
include_once 'cabecera.html';
include '../services/conexion.php';
if (isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR SALA</title>
</head>
<body>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="modificarsala.proc.php" method="post">
    <h1 class="centrartexto">MODIFICAR SALA</h1><br><br>
        <label for="nom_sala">Nom sala</label>
        <input type="text" class="form-control" name="nom_sala" id="nom_sala" value="<?php echo $_GET['nom_sala'];?>">
        <br>
        <input type="hidden" name="id_sala" id="id_sala" value="<?php echo $_GET['id_sala'];?>">

        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
    </div>
    </div>
</body>
</html>
<?php } else {header('location:../view/login.php');}?>