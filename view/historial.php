<?php
include '../services/conexion.php';
include_once '../processes/cabecera.html';
session_start();
if (isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/menu.js"></script>
    <title>USUARIS</title>
</head>

<body class="historial">
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../processes/logout.proc.php">Logout</a>
  <a href="home.php">Home</a>
  <a href="mostrarusuaris.php">Usuaris</a>
  <a href="mostrartaules.php">Administrar taules</a>
  <a href="mostrarsales.php">Administrar sales</a>  
</div>

<button class="openbtn" onclick="openNav()">&#9776;</button>

<div class="cuerpo-home">
  
  <div class="mostrar-mesashistorial">
  
  <?php
  
    $stmt=$pdo->prepare("SELECT id_reserva, nom_reserva, data_reserva, inici_reserva, data_alliberament_reserva, num_taula  FROM tbl_reserva ");
    $stmt->execute();
    $reservas=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($reservas as $reserva) {
      
        ?>
        
        <div class="sala">
        <tr class="registro-historial">
        <td>
          <h4 class="h4historial"><?php echo $reserva['id_reserva'];?></h4>
        </td>
        <td>
          <h4 class="h4historial"><?php echo $reserva['nom_reserva'];?></h4>
        </td>
        <td>
          <h6 class="h6historial"><?php echo $reserva['data_reserva'];?></h6>
        </td>  
        <td>
          <h6 class="h6historial"><?php echo $reserva['inici_reserva'];?></h6>
        </td>
        <td>
          <h6 class="h6historial"><?php echo $reserva['data_alliberament_reserva'];?></h6>
        </td>
        <td>
          <h6 class="h6historial"><?php echo $reserva['num_taula'];?></h6>
        </td>
          </tr>
          
            
        </div>
        
        <?php
    }
    ?>
  </div>
</div>
<?php } else {header('location:login.php');}?>