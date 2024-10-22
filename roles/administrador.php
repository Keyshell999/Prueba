<?php
include_once "../modelo/conectar.php";
include_once "../controlador/reg_administrador.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6454b76c85.js" crossorigin="anonymous"></script>
    <title>CLIENTE</title>

</head>

<body>

    <h1 class="text-center p-3">Administrador</h1>

    <div class="container-fluid row">

        <form class="col-4 p3" method="POST">

            <h3 class="text-center text-secondary">Registro de administrador</h3>
    

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nivel de acceso</label>
                <input type="text" class="form-control" name="nivel_acceso">
            </div>
            
            <button type="submit" class="btn btn-primary" name="registrar" value="OK">Registrar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>