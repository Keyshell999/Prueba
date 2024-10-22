<?php
session_start();

// Verifica si hay un ID de usuario en la sesión
if (!isset($_SESSION['id_usuario'])) {
    echo '<div class="alert alert-danger">Error: No se ha registrado ningún usuario.</div>';
    exit(); // Detiene la ejecución si no hay un ID de usuario
}

if (isset($_POST['registrar'])) {

        $direccion = $_POST['direccion'];
        $num_celular = $_POST['num_celular'];
        $id_usuario = $_SESSION['id_usuario']; // Obtiene el ID de la sesión


        $sql_cliente = $conectar->query("INSERT INTO cliente (direccion, num_celular, id_usuario) VALUES ('$direccion', '$num_celular', '$id_usuario')");

        
        if ($sql_cliente) {
            echo '<div class="alert alert-success">Servicio registrado exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar servicio:</div>';
        }
}
