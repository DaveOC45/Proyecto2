<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sala</title>
</head>
<body>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="insertarsala.php" method="post" enctype="multipart/form-data">
    <h1 class="centrartexto">CREAR SALA</h1><br><br>
        <input type="file" name="img" id='img'><br>
        <input type="hidden" name="id_sala" id='id_sala' value="<?php echo $_GET['id_sala']?>">
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
    </div>
</body>
</html>