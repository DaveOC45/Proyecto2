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
  <a href="historial.php">Historial</a>
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
          echo "<td><a type='button' class='btn btn-success'href='../processes/creartaula.php'>Crear taula</a></td>";
          ?>
  <?php
      if(!isset($_POST['enviarfiltro'])){
        $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala order by t.estat_taula, t.num_taula;");
        $stmt->execute();
        $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);    
      }else{
            //000
          if(($_POST['estado']=='ambas') && ($_POST['num_taula']=="*") && $_POST['sala']=='*'){
              $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala order by t.estat_taula, t.num_taula;");
              $stmt->execute();
              $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);  
          }//100
          elseif($_POST['estado']!='ambas' && ($_POST['num_taula']=="*") && ($_POST['sala']=='*')){
              $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.estat_taula='".$_POST['estado']."' order by t.estat_taula, t.num_taula;");
              $stmt->execute();
              $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);  
          }//110
          elseif($_POST['estado']!='ambas' && ($_POST['num_taula']!="*") && ($_POST['sala']=='*')){
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.estat_taula='".$_POST['estado']."' and t.num_taula='".$_POST['num_taula']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);     
          }//101
          elseif($_POST['estado']!='ambas' && ($_POST['num_taula']=="*") && ($_POST['sala']!='*')){
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.estat_taula='".$_POST['estado']."' and s.nom_sala='".$_POST['sala']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);     
          }//010
          elseif($_POST['estado']=='ambas' && ($_POST['num_taula']!="*") && ($_POST['sala']=='*')){
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.num_taula='".$_POST['num_taula']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);     
          }//011
          elseif($_POST['estado']=='ambas' && ($_POST['num_taula']!="*") && ($_POST['sala']!='*')){
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.num_taula='".$_POST['num_taula']."' and s.nom_sala='".$_POST['sala']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);     
          }//001
          elseif($_POST['estado']=='ambas' && ($_POST['num_taula']=="*") && ($_POST['sala']!='*')){
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where s.nom_sala='".$_POST['sala']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);  
          }//111
          else{
            $stmt=$pdo->prepare("SELECT t.num_taula, t.num_llocs_taula, t.id_sala, t.estat_taula, s.nom_sala from tbl_taula t inner join tbl_sala s on t.id_sala=s.id_sala where t.estat_taula='".$_POST['estado']."' and t.num_taula='".$_POST['num_taula']."' and s.nom_sala='".$_POST['sala']."' order by t.estat_taula, t.num_taula;");
            $stmt->execute();
            $listamesas=$stmt->fetchAll(PDO::FETCH_ASSOC);                
          }
      }
      
      foreach ($listamesas as $mesa) {

        ?>
        <div class="mesa">
          
          
          <div class="centrardivxd">
            <h4><?php echo "<br>Taula num. ".$mesa['num_taula']; ?></h4>
            <h6><?php echo "<br>Sala: ".$mesa['nom_sala']; ?></h6>
            <h6><?php echo "<br>Num. de llocs: ".$mesa['num_llocs_taula']; ?></h6>
            <h6><?php 
            if($mesa['estat_taula']==1){
              echo "<br>Estat de la taula: <span class='estat-taula-reservada'>Reservada</span></h6>";
            }else{
              echo "<br>Estat de la taula: <span class='estat-taula-lliure'>Lliure</span></h6>";
            }
            ?>
          </div>
          <?php
              echo "<tr>";
              echo "<td><a type='button' class='btn btn-danger' href='../processes/eliminartaula.php?num_taula={$mesa['num_taula']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Borrar</a></td>";
              echo "<td><a type='button' class='btn btn-modificar' href='../processes/modificartaula.php?num_taula={$mesa['num_taula']}&num_llocs_taula={$mesa['num_llocs_taula']}&id_sala={$mesa['id_sala']}&estat_taula={$mesa['estat_taula']}'>Actualizar</a></td>";
              echo '</tr>';
              
            ?>
        </div>
        <?php
      }
      $count= count($listamesas);
      ?>
              <input type=hidden value='<?php echo $count;?>' id='count'>
  </div>
</div>
<?php } else {header('location:login.php');}?>