<?php
if (isset($_GET['id'])) {
    $conexion = new mysqli("localhost", "root", "", "usuariosdb");
    if ($conexion->connect_error) die("Error de conexión");

    $id = intval($_GET['id']);
    $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: listar_usuarios.php");
    } else {
        echo "Error al borrar el usuario.";
    }
    $stmt->close();
    $conexion->close();
}
?>