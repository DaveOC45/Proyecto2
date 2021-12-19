<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR IMATGE</title>
</head>
<body>
    <center><h1>Insertar imatge</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="insertarimg.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" id='title'>
        <input type="file" name="img" id='img'>
        <input type="hidden" name="id_sala" id='id_sala' value="<?php echo $_GET['id_sala']?>">
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</body>
</html>