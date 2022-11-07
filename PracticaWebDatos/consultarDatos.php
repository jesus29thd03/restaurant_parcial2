<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
 
    <style>
	   
	   th{
	   	background-color:  #7E9079 ;
	   }
	   td{
	   	background-color: #7E9079 ;
	   }
	 
	</style>

</head>
<body  background="imagenes/fondo.jpg">

    <?php
      include 'conexion.php';
      $sql = "select * from cliente";
      $datos = $conexion->query($sql);
     

    ?>

    <?php include 'menu.php'; ?>
    <br>
      

    <div class="container">
    <a href="registrarDatos.php" class="btn btn-primary">Agregar reservacion</a><br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Domicilio</th>
                            <th>Fecha de nacimiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 

                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["edad"]; ?></td>
                             
                            <?php if($row["sexo"] == 1) {?>
                                
                                <td><?php echo"masculino"?></td>
                        <?php } else{ ?>
                            
                            <td><?php echo"Femenino"?></td>
                       <?php } ?> 
                     
    
                            <td><?php echo $row["domicilio"]; ?></td>
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td>
                          
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <script src="js/bootstrap.js"></script>

</body>
</html>