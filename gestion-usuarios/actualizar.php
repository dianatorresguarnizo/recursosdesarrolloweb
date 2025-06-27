
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = new mysqli("localhost", "root", "", "usuariosdb");
    if ($conexion->connect_error) die("Error de conexión");

    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];

    $stmt = $conexion->prepare("UPDATE usuarios SET nombre = ?, apellidos = ?, correo = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nombre, $apellidos, $correo, $id);

    if ($stmt->execute()) {
        header("Location: listar_usuarios.php");
    } else {
        echo "Error al actualizar el usuario.";
    }

    $stmt->close();
    $conexion->close();
}
?>