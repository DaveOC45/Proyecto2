<?php 
session_start();
include '../services/conexion.php';
if (isset($_SESSION['username'])){
?>
<?php 
$id_reserva=$_GET['id_reserva'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FER RESERVA</title>
</head>
<body class="imagenfondo">
    <br>
    
    <br><br><br><br>
    <div class="cuerpo-home">
    <div class="divformularios">
    <form action="modificarreservavalidacion.php?id_reserva=<?php echo $id_reserva; ?>" method="POST">
                    <h1 class="centrartexto">MODIFICAR RESERVA</h1><br><br>
                    <input type="hidden" name="id_reserva" id="id_reserva" value="<?php echo $_GET['id_reserva'];?>">
                    <label for="nom_reserva">nom reserva</label>
                    <input type="text" class="form-control" name="nom_reserva" id="nom_reserva" value="<?php echo $_GET['nom_reserva'];?>">
                    <br>
                    <label for="nom_reserva">data reserva</label>
                    <input type="date" class="form-control" name="data_reserva" id="data_reserva" min="<?php echo date("Y-m-d"); ?>" value="<?php echo $_GET['data_reserva'];?>">
                    
                    <center>
                        <br><br>
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
                    <center><input type="submit" name="reservar" value="modificar"></center>
                </form>
                <div id="mensaje2"><?php
                    if(isset($_GET["error2"])){
                    ?>
                        <script>
                            document.getElementById('mensaje2').innerHTML = "<p>Aquesta reserva no es pot modificar</p>";
                            document.getElementById('mensaje2').style.color = "orange";
                        </script>
                    <?php
                    }
                    ?>
</body>
</html>
<?php } else {header('location:../view/login.php');}?>