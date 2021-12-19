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
          echo "<td><a type='button' class='btn btn-success'href='../processes/crearsala.php'>Crear sala</a></td>";
          ?>
  <?php
  
    $stmt=$pdo->prepare("SELECT id_sala, nom_sala, id_rest, img  FROM tbl_sala ");
    $stmt->execute();
    $sales=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($sales as $sala) {
      
        ?>
        
        <div class="sala">
          <tr>
            <br><br>  <td><h1><?php echo $sala['id_sala'];?></h1> </td>
            <td><h1><?php echo $sala['nom_sala'];?></h1></td>
            <center><td><img src="../img/<?php echo $sala['img'];?>" alt="" width="150px" ></td></center>
            <td></td>
            <br><br>
          </tr>
          
            
        </div>
        <?php
              echo "<tr>";
              echo "<td><a type='button' class='btn btn-danger' href='../processes/eliminarsala.php?id_sala={$sala['id_sala']}'  onclick=\"return confirm('Estás segur de borrar?')\">Borrar</a></td>";
              echo "<td><a type='button' class='btn btn-modificar' href='../processes/modificarsala.php?id_sala={$sala['id_sala']}&nom_sala={$sala['nom_sala']}'>Actualizar</a></td>";

              echo '</tr>';
              
            ?>
        
        <?php
    }
    ?>
  </div>
</div>
<?php } else {header('location:login.php');}?>