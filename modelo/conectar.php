<?php
$conectar = new mysqli("localhost", "root", "", "login_2");
$conectar->set_charset("utf8");

if ($conectar->connect_error) {
    die("Error de conexión: " . $conectar->connect_error);
}

echo 'Conexion exitosa';
?>