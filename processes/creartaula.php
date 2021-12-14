<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Taula</title>
</head>
<body>
    <center><h1>Crear Taula</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="insertartaula.php" method="post">

        <label for="num_taula">Número de la taula</label>
        <input type="number" class="form-control" name="num_taula" id="num_taula">

        <label for="num_llocs_taula">Número de llocs de la nova taula</label>
        <input type="number" class="form-control" name="num_llocs_taula" id="num_llocs_taula">

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
        <label for="estat_taula">Estat de la taula -> lliure = 0, reservada = 1</label>
        <input type="number" class="form-control" name="estat_taula" id="estat_taula">
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</body>
</html>