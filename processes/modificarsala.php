<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR SALA</title>
</head>
<body>
    <center><h1>Modificar sala</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="modificarsala.proc.php" method="post">
        <label for="nom_sala">Nom sala</label>
        <input type="text" class="form-control" name="nom_sala" id="nom_sala" value="<?php echo $_GET['nom_sala'];?>">
        <br>
        <input type="hidden" name="id_sala" id="id_sala" value="<?php echo $_GET['id_sala'];?>">

        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
    </div>
</body>
</html>