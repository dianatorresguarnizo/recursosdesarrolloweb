<?php
$conexion = new mysqli("localhost", "root", "", "usuariosdb");
if ($conexion->connect_error) die("Error de conexión");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$verificar = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
$verificar->bind_param("s", $correo);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo "<p style='text-align:center; color:red;'>El correo ya está registrado.</p>";
} else {
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellidos, correo, clave) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $apellidos, $correo, $clave);
    if ($stmt->execute()) {
        echo "<p style='text-align:center; color:green;'>Usuario registrado correctamente.</p>";
        echo "<p style='text-align:center;'><a href='listar_usuarios.php'>Ver lista de usuarios</a></p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error al registrar el usuario.</p>";
    }
    $stmt->close();
}
$verificar->close();
$conexion->close();
?>