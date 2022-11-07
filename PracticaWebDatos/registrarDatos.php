<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>

     

</head>
<body  background="imagenes/fondo.jpg">
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1><span class="badge badge-pill badge-dark"><h1>Registrar reservacion</h1></span></h1>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                    <h1><span class="badge badge-pill badge-primary">Nombre</span></h1>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-pill badge-primary">Edad</span></h1>
                        <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>

                    <h1><span class="badge badge-pill badge-primary">Sexo</span></h1>
                    <div class="form-group">
                        <div stlye>
                             <b>
                        <input type="radio" name="sexo" value="1"><span class="badge badge-pill badge-light">Masculino</span><br>
                        <input type="radio" name="sexo" value="0"><span class="badge badge-pill badge-light">Femenino</span>
                           </b> 
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-pill badge-primary">Domicilio</span></h1>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-pill badge-primary">Fecha de nacimiento</span></h1>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
