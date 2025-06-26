<?php

    $conexion = new mysqli("localhost", "root", "", "usuariosdb");

    if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>