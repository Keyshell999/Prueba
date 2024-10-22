<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6454b76c85.js" crossorigin="anonymous"></script>
    <title>Prueba de registro</title>

</head>

<body>

    <h1 class="text-center p-3">Gestion de servicios</h1>

    <div class="container-fluid row">

        <form class="col-4 p3" method="POST">

            <h3 class="text-center text-secondary">Registro de usuario</h3>
            <?php
            include_once "modelo/conectar.php";
            include_once "controlador/reg_usuario.php";
            ?>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="contraseña">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de usuario</label>
                <input type="number" class="form-control" name="id_tipo_usuario">

            </div>

            <button type="submit" class="btn btn-primary" name="registrar" value="OK">Registrar</button>
        </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>