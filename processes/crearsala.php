<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sala</title>
</head>
<body>
    <center><h1>Crear sala</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="insertarsala.php" method="post">
        <label for="nom_sala">Nom nova sala</label>
        <input type="text" class="form-control" name="nom_sala" id="nom_sala">
        <br><br>
        <!-- <label>Imatge de la sala</label><br><br>
        <input type="file" name="img" id="img">
             <br><br> -->
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</body>
</html>