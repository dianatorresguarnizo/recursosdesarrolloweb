<?php

    include "conexion.php";
    $sql = "SELECT nombre, apellidos, correo FROM usuarios";
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

    <h2>Listado de Usuarios Registrados</h2>

    <?php
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellidos</th><th>Correo</th></tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($fila['apellidos']) . "</td>";
            echo "<td>" . htmlspecialchars($fila['correo']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No hay usuarios registrados.</p>";
    }

    $conexion->close();
    ?>
    <footer><h3>@datorres - 2025</h3></footer>
</body>
</html>
