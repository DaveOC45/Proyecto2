<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuari</title>
</head>
<body>
    <center><h1>Crear Usuari</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="insertarusuari.php" method="post">
        <label for="nom_usuari">Nom nou usuari</label>
        <input type="text" class="form-control" name="nom_usuari" id="nom_usuari">
        <label for="cognom_usuari">Cognom nou usuari</label>
        <input type="text" class="form-control" name="cognom_usuari" id="cognom_usuari">
        <label for="contra_usuari">Contrasenya per usuari en MD5</label>
        <input type="datetime" class="form-control" name="contra_usuari" id="contra_usuari">  
        <label for="tipus_usuari">Usuari cambrer o manteniment?</label>
        <select name="tipus_usuari" id="tipus_usuari">
            <option value="cambrer">cambrer</option>
            <option value="manteniment">manteniment</option>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</body>
</html>