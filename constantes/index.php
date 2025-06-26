<?php
// Declaración de Constantes en PHP

    // Declaración de constantes
    define("PI", 3.1416);
    define("NOMBRE_APP", "Mi Aplicación PHP");
    define("ES_ACTIVO", true);

    // Uso de constantes
    echo "DECLARACION DE CONSTANTES" ."<br>";
    echo "El valor de PI es: " . PI . "<br>";
    echo "Nombre de la aplicación: " . NOMBRE_APP . "<br>";
    echo "¿Está activo?: " . (ES_ACTIVO ? "Sí" : "No") . "<br>";
?>
