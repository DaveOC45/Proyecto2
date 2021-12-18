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
          echo "<td><a type='button' class='btn btn-success'href='../processes/crearusuari.php'>Crear usuari</a></td>";
          ?>
  <?php
  
    $stmt=$pdo->prepare("SELECT id_usuari, nom_usuari, cognom_usuari, contra_usuari, tipus_usuari FROM tbl_usuari ");
    $stmt->execute();
    $usuaris=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuaris as $usuari) {
      
        ?>
        
        <div class="usuari">
          <table>
          <tr>
            <br><br><td><h1><?php echo $usuari['nom_usuari'];?></h1> </td>
            <td><h1><?php echo $usuari['cognom_usuari'];?></h1></td>
            <td><h1><?php echo $usuari['tipus_usuari'];?></h1></td><br>
            
          </tr>
          
          </table>
          
        </div>
        <?php
              echo "<tr>";
              echo "<td><a type='button' class='btn btn-danger' href='../processes/eliminarusuari.php?id_usuari={$usuari['id_usuari']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Borrar</a></td>";
              echo "<td><a type='button' class='btn btn-modificar' href='../processes/modificarusuari.php?id_usuari={$usuari['id_usuari']}&nom_usuari={$usuari['nom_usuari']}&cognom_usuari={$usuari['cognom_usuari']}&contra_usuari={$usuari['contra_usuari']}&tipus_usuari={$usuari['tipus_usuari']}'>Actualizar</a></td>";
              echo '</tr>';
              
            ?>
        
        <?php
    }
    ?>
  </div>
</div>
<?php } else {header('location:login.php');}?>