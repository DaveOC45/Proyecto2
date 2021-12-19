<?php include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR TAULA</title>
</head>
<body>
    <center><h1>Modificar taula</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="modificartaula.proc.php" method="post">
    <input type="hidden" name="id_reserva" id="id_reserva" value="<?php echo $_GET['id_reserva'];?>">

    <input type="hidden"name="num_taula" value="<?php echo $num_taula;?>">
                    <center><input type="text" class="form-control" name="nom_reserva" placeholder="Nom a reservar" required><br><br><br></center>
                    <center><input type="date" class="form-control" name="data_reserva" id="data_reserva" min="<?php echo date("Y-m-d"); ?>" required><br><br><br></center>
                    <center>
                    <select name="inici_reserva" id="inici_reserva" required>
                        <option value="%">hora</option>
                        <option value="11:00:00">11:00</option>
                        <option value="12:00:00">12:00</option>
                        <option value="13:00:00">13:00</option>
                        <option value="14:00:00">14:00</option>
                        <option value="15:00:00">15:00</option>
                        <option value="16:00:00">16:00</option>
                        <option value="17:00:00">17:00</option>
                        <option value="18:00:00">18:00</option>
                        <option value="19:00:00">19:00</option>
                        <option value="20:00:00">20:00</option>
                        <option value="21:00:00">21:00</option>
                        <option value="22:00:00">22:00</option>
                        <option value="23:00:00">23:00</option>
                        <option value="24:00:00">24:00</option>
                    </select><br><br><br>
                    </center>

        <input type="submit" class="btn btn-success" value="Actualizar">
    </form>
    </div>
</body>
</html>