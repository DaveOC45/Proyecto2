# PROYECTO 2 DAVID ORTEGA

**Este proyecto trata sobre hacer reservas, crud de usuarios y recursos, validaciones, transacciones, bbdd y css**

## Comenzando 🚀

Si quieres obtener mi proyecto sigue estos pasos:

1. Clonar mi repositorio.
2. Descargar en zip mis archivos.
3. Insertar la base de datos al phpmyadmin con las credenciales correctas en tu caso.


## Pre-requisitos 📋

EDITOR DE CÓDIGO-> VISUAL STUDIO CODE
INSTALAR XAMPP: https://www.apachefriends.org/es/index.html

### Acceso login
```
USUARIO  |  CONTRASEÑA
-----------------------
David    |  qweQWE123   
Profesor |  qweQWE123
Cambrer  |  asdASD123

David y Profesor son admins, mientras que Cambrer solo puede hacer reservas y mirarlas.
```

## Instalación 🔧
-Meter los archivos previamente descargados en c:\xampp\htdocs\www\proyecto2.
-Tener activados los servicios Apache y MySQL en XAMPP.

NOTA: Este proyecto está pensado para usuarso con phpmyadmin.

### Crear carpeta dentro de services donde está config.php y poner lo siguiente
```
<?php
require_once '../services/config.php';
$servidor= "mysql:host=".SERVIDOR."; dbname=".BD; 
try{
    $pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
}catch(PDOException $e){
    echo $e->getMessage();
    echo "<script> alert('Error de conexion')</script>";
}

$host = "localhost";
$usr = "root";
$pwd = "";
$db = "bd_restaurant";

$connection = new mysqli("$host", "$usr", "$pwd",$db);
?>
```

## Despliegue 📦

Para tener el proyecto ya terminado y dejarlo descansar vamos a subir el proyecto a un Hosting en este caso será el de **000WEBHOST**
Accedes a la plataforma, creas un sitio gratuito y subes el proyecto a la plataforma. Cambias la conexion a la base de datos ya que serán distintos y hecho. Te dejo el enlace del codigo subido al hosting gratuito: https://doc-brown.000webhostapp.com/

## Construido con 🛠️

    PHP - Lenguaje Nativo
    MYSQL - Gestor de base de datos
    CSS - Lenguaje de estilos
    JavaScript - Lenguage desarollo cliente
    Bootstrap - Biblioteca de estilos
    SweetAlet - Biclioteca de alertas JS
    FontAwesome - Libreria de iconos

## Autores ✒️

    Xavier Gómez - Desarollador WEB

## Expresiones de Gratitud 🎁

    Si le ha gustado, comparta mi perfil con sus amigos 📢
    Les dejo mis redes sociales para cualquier contacto 📱
    -Instagram: @xavier.gomezgallego
    -Twitter: @xaviermireia1
