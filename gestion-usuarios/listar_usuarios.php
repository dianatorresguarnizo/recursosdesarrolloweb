<?php
$conexion = new mysqli("localhost", "root", "", "usuariosdb");
if ($conexion->connect_error) die("Error de conexión");

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h2>Usuarios Registrados</h2>
<?php
if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellidos</th><th>Correo</th><th>Acciones</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$fila['nombre']}</td>";
        echo "<td>{$fila['apellidos']}</td>";
        echo "<td>{$fila['correo']}</td>";
        echo "<td>
            <a href='editar.php?id={$fila['id']}'>Actualizar</a> |
            <a href='borrar.php?id={$fila['id']}' onclick='return confirm(\"¿Deseas eliminar este usuario?\")'>Borrar</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay usuarios registrados.</p>";
}
$conexion->close();
?>
</body>
</html>