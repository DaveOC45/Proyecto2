
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuari</title>
</head>
<body>
    <br>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="insertarusuari.php" method="post">
        <h1 class="centrartexto">CREAR USUARI</h1><br><br>
        <label for="nom_usuari">Nom nou usuari</label>
        <input type="text" class="form-control" name="nom_usuari" id="nom_usuari" required>
        <label for="cognom_usuari">Cognom nou usuari</label>
        <input type="text" class="form-control" name="cognom_usuari" id="cognom_usuari" required>
        <label for="contra_usuari">Contrasenya per usuari en MD5</label>
        <input type="datetime" class="form-control" name="contra_usuari" id="contra_usuari" required><br>
        <label for="tipus_usuari">Usuari cambrer o manteniment?</label>
        <select name="tipus_usuari" id="tipus_usuari">
            <option value="cambrer">cambrer</option>
            <option value="manteniment">manteniment</option>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</div>
    
</body>
</html>