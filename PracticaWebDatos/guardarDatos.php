<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
      .color{
        color: white;
      }
    </style>
    
    <title>Document</title>
 </head>
 <body  background="imagenes/fondo.jpg";>


 <?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$domicilio = $_POST["domicilio"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "INSERT INTO cliente (nombre, edad, sexo, domicilio, fecha_nacimiento)". 
"VALUES ('".$nombre."', ".$edad.", ".$sexo.", '".$domicilio."', '".$fecha_nacimiento."')";

?>
  
<?php
if($conexion->query($sql) === TRUE){
    echo""?>  
    <br><br> <br><br> <br><br> <br><br>
    <center>
     <h1 class="color">"Gracias por reservar con nosotros" <br>
        <a class="badge badge-pill badge-primary" href='consultarDatos.php'>Ver lista de reservaciones</a> <br>
        <a class="badge badge-pill badge-primary" href="index.php">Menu</a><br> 
        <a class="badge badge-pill badge-primary" href="registrarDatos.php">Hacer otra reservacion</a><br><br>
     </h1> 
     <img src="imagenes/emoji3.jpg" class="mr-3" alt="..." width="150px" height="150px"></center><br><br>
     <?php
} else {
    echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
}

$conexion->close();

?>
 
 
 
 
 

 
    
 </body>
 </html>
