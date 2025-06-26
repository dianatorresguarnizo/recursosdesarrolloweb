<?php
// Declaración de Variables en PHP

// Variable de tipo cadena (string)
$nombre = "Diana";

// Variable de tipo entero (integer)
$edad = 30;

// Variable de tipo flotante (float o double)
$altura = 1.75;

// Variable de tipo booleano (boolean)
$esEstudiante = true;

// Variable de tipo array (arreglo)
$lenguajes = array("PHP", "JavaScript", "Python");

// Variable de tipo null
$valorNulo = null;

// Mostramos las variables
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . " metros<br>";
echo "¿Es estudiante?: " . ($esEstudiante ? "Sí" : "No") . "<br>";
echo "Lenguajes de programación: " . implode(", ", $lenguajes) . "<br>";
echo "Valor nulo: " . var_export($valorNulo, true) . "<br>";

?>
