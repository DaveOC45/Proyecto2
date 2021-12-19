<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR USUARI</title>
</head>
<body>
    
    <br>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="modificarusuari.proc.php" method="post">
    <h1 class="centrartexto">CREAR USUARI</h1><br><br>
        <label for="nom_usuari">Nom usuari</label>
        <input type="text" class="form-control" name="nom_usuari" id="nom_usuari" value="<?php echo $_GET['nom_usuari'];?>">
        <label for="cognom_usuari">Cognom usuari</label>
        <input type="text" class="form-control" name="cognom_usuari" id="cognom_usuari" value="<?php echo $_GET['cognom_usuari'];?>">
        <label for="contra_usuari">Contrasenya usuari</label>
        <input type="text" class="form-control" name="contra_usuari" id="contra_usuari" value="<?php echo $_GET['contra_usuari'];?>"> <br> 
        <select name="tipus_usuari" id="tipus_usuari">
            <option value="cambrer">cambrer</option>
            <option value="manteniment">manteniment</option>
        </select>
        <br>
        <input type="hidden" name="id_usuari" id="id_usuari" value="<?php echo $_GET['id_usuari'];?>">

        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
    </div>
    </div>
</body>
</html>