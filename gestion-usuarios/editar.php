<?php
if (isset($_GET['id'])) {
    $conexion = new mysqli("localhost", "root", "", "usuariosdb");
    if ($conexion->connect_error) die("Error de conexión");

    $id = intval($_GET['id']);
    $stmt = $conexion->prepare("SELECT nombre, apellidos, correo FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = $resultado->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h2>Editar Usuario</h2>
<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br><br>
    <label>Apellidos:</label><br>
    <input type="text" name="apellidos" value="<?= $usuario['apellidos'] ?>" required><br><br>
    <label>Correo:</label><br>
    <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required><br><br>
    <input type="submit" value="Actualizar">
</form>
</body>
</html>