<?php
    // Estructuras control en PHP

    echo "<h2>Estructuras de Control en PHP</h2>";

    echo "<h3>1. Estructura if / if-else / if-elseif-else</h3>";
    $edad = 18;

    if ($edad < 18) {
        echo "Eres menor de edad.<br>";
    } elseif ($edad == 18) {
        echo "Tienes 18 años.<br>";
    } else {
        echo "Eres mayor de edad.<br>";
    }

    echo "<h3>2. Estructura switch</h3>";
    $dia = "martes";

    switch ($dia) {
        case "lunes":
            echo "Hoy es lunes.<br>";
            break;
        case "martes":
            echo "Hoy es martes.<br>";
            break;
        case "miércoles":
            echo "Hoy es miércoles.<br>";
            break;
        default:
            echo "Día no reconocido.<br>";
            break;
    }

    echo "<h3>3. Estructura while</h3>";
    $contador = 1;

    while ($contador <= 5) {
        echo "Contador (while): $contador<br>";
        $contador++;
    }

    echo "<h3>4. Estructura do-while</h3>";
    $contador = 1;

    do {
        echo "Contador (do-while): $contador<br>";
        $contador++;
    } while ($contador <= 5);

    echo "<h3>5. Estructura for</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Contador (for): $i<br>";
    }

    echo "<h3>6. Estructura foreach</h3>";
    $frutas = ["Manzana", "Banana", "Naranja"];

    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }
?>
