 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <title>Document</title>

    <style>
      .color{
        color: white;
      }
    </style>
 </head>
 <body  background="imagenes/fondo.jpg">

 <?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $domicilio = $_POST["domicilio"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql = "UPDATE cliente    SET nombre='".$nombre."' , edad= ".$edad.",". 
    "sexo = $sexo, domicilio = '".$domicilio."', fecha_nacimiento ='".$fecha_nacimiento."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo""?>  
        <br><br> <br><br> <br><br> <br><br>
        <center>
         <h1 class="color">"Reservacion actualizada con exito" <br>
            <a class="badge badge-pill badge-primary" href='consultarDatos.php'>Ver lista de reservaciones</a> <br>
            <a class="badge badge-pill badge-primary" href="index.php">Menu</a><br> 
            <a class="badge badge-pill badge-primary" href="registrarDatos.php">Hacer otra reservacion</a><br><br>
         </h1> 
         <img src="imagenes/emoji4.png" class="mr-3" alt="..." width="150px" height="150px"></center><br><br>
         <?php
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>
    
 </body>
 </html>