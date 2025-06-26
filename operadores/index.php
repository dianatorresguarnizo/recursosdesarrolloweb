<?php
// Ejemplo de Uso de Operadores en PHP

// Operadores aritméticos
$a = 10;
$b = 3;

$suma = $a + $b;
$resta = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
$modulo = $a % $b;

echo "<h3>Operadores Aritméticos</h3>";
echo "Suma: $a + $b = $suma<br>";
echo "Resta: $a - $b = $resta<br>";
echo "Multiplicación: $a * $b = $multiplicacion<br>";
echo "División: $a / $b = $division<br>";
echo "Módulo: $a % $b = $modulo<br>";

// Operadores de asignación
$c = 5;
$c += 2; // equivalente a $c = $c + 2;

echo "<h3>Operadores de Asignación</h3>";
echo "Valor de c después de += 2: $c<br>";

// Operadores de comparación
$x = 10;
$y = "10";

echo "<h3>Operadores de Comparación</h3>";
echo "¿\$x == \$y? : " . var_export($x == $y, true) . "<br>";     // true
echo "¿\$x === \$y? : " . var_export($x === $y, true) . "<br>";   // false
echo "¿\$x != \$y? : " . var_export($x != $y, true) . "<br>";     // false
echo "¿\$x !== \$y? : " . var_export($x !== $y, true) . "<br>";   // true

// Operadores lógicos
$valor1 = true;
$valor2 = false;

echo "<h3>Operadores Lógicos</h3>";
echo "AND (&&): " . var_export($valor1 && $valor2, true) . "<br>";
echo "OR (||): " . var_export($valor1 || $valor2, true) . "<br>";
echo "NOT (!): " . var_export(!$valor1, true) . "<br>";

// Operadores de incremento/decremento
$numero = 5;

echo "<h3>Incremento/Decremento</h3>";
echo "Valor original: $numero<br>";
echo "Post-incremento: " . $numero++ . "<br>"; // Imprime 5, luego suma 1
echo "Después del post-incremento: $numero<br>";
echo "Pre-incremento: " . ++$numero . "<br>";  // Suma 1 antes de imprimir

// Operador de concatenación
$nombre = "Diana";
$apellido = "Torres";
$nombreCompleto = $nombre . " " . $apellido;

echo "<h3>Concatenación de Cadenas</h3>";
echo "Nombre completo: $nombreCompleto<br>";
?>
