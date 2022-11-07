 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <title>Document</title>}
    <style>
       .color{
        color: white;
       }
    </style>
 </head>
 <body background="imagenes/fondo.jpg">

 <?php

    include 'conexion.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM cliente WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
        echo""?>  
    <br><br> <br><br> <br><br> <br><br>
    <center>
     <h1 class="color">"Reservacion canselada" <br>
        <a class="badge badge-pill badge-primary" href='consultarDatos.php'>Ver lista de reservaciones</a> <br>
        <a class="badge badge-pill badge-primary" href="index.php">Menu</a><br> 
        <a class="badge badge-pill badge-primary" href="registrarDatos.php">Hacer otra reservacion</a><br><br>
     </h1> 
     <img src="imagenes/emoji5.jpg" class="mr-3" alt="..." width="150px" height="150px"></center><br><br>
     <?php
    } else {
        echo "Ocurrió un error: " . $conexion->error ."<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    }

?>
    
 </body>
 </html>