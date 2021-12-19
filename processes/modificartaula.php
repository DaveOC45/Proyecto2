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
    <title>MODIFICAR TAULA</title>
</head>
<body>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="modificartaula.proc.php" method="post">
    <h1 class="centrartexto">MODIFICAR TAULA</h1><br><br>
    <input type="hidden" name="num_taula" id="num_taula" value="<?php echo $_GET['num_taula'];?>">

        <label for="num_llocs_taula">Número de llocs de la taula</label>
        <input type="number" class="form-control" name="num_llocs_taula" id="num_llocs_taula" value="<?php echo $_GET['num_llocs_taula'];?>">  
        
        <label for="id_sala">Quina sala es?</label>
        <select name="id_sala" id="id_sala">
            <option value="1">Menjador Radiohead</option>
            <option value="2">Menjador Queen</option>
            <option value="6">Sala privada ABBA</option>
            <option value="7">Sala privada Green Day</option>
            <option value="8">Sala privada Beatles</option>
            <option value="9">Sala privada My Chemical Romance</option>
            <option value="10">Terrassa ACDC</option>
            <option value="11">Terrassa Nirvana</option>
            <option value="12">Terrassa Guns n Roses</option>
        </select>
        <br><br>

        <br>

        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
    </div>
    </div>
</body>
</html>
<?php } else {header('location:../view/login.php');}?>