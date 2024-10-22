<?php
session_start();


if (isset($_POST['registrar'])) {
    

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $id_tipo_usuario = $_POST['id_tipo_usuario'];

        $sql_usuario = $conectar->query("INSERT INTO usuario (nombre, apellido, correo, contraseña, id_tipo_usuario) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$id_tipo_usuario')");

        if ($sql_usuario) {
            // Obtener el ID del último registro insertado
            $_SESSION['id_usuario'] = $conectar->insert_id; // Almacena el ID en la sesión
            echo '<div class="alert alert-success">Usuario registrado exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar servicio:</div>';
        }

        if ($id_tipo_usuario == 1) {
            // Redirigir a la página de registro de cliente
            header('Location: roles/cliente.php');
            exit(); // Termina el script después de redireccionar
        } elseif ($id_tipo_usuario == 2) {
            // Redirigir a la página de registro de profesional
            header('Location: roles/profesional.php');
            exit();
        } elseif ($id_tipo_usuario == 3) {
            // Redirigir a la página de administrador
            header('Location: roles/administrador.php');
            exit();
        } else {
            // Manejar casos inesperados
            echo '<div class="alert alert-danger">Error al registrar servicio:</div>';
            exit();
        }

        
    
}
