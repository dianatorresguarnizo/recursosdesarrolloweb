<?php
// Validar si se ha enviado el comentario por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Obtener y limpiar el comentario
    $comentario = trim($_POST["comentario"] ?? '');

    // Validar que no esté vacío
    if (empty($comentario)) {
        exit("Debes proporcionar un comentario.");
    }

    // Sanitizar: eliminar etiquetas HTML y PHP
    $comentario = strip_tags($comentario);

    // Añadir salto de línea al final y guardar en archivo
    $comentario .= PHP_EOL;
    file_put_contents("comentarios.txt", $comentario, FILE_APPEND);

    echo "Comentario guardado con éxito.<br><br>";
}

// Mostrar comentarios existentes de forma segura
if (file_exists("comentarios.txt")) {
    $comentarios = file_get_contents("comentarios.txt");
    echo "<h3>Comentarios:</h3>";
    echo nl2br(htmlspecialchars($comentarios));
}
?>
