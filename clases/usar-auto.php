<?php
// Incluir la clase Auto
include 'Auto.php';

// Crear un objeto basado en la clase Auto
$miAuto = new Auto("Toyota", "Rojo");

// Mostrar información inicial
$miAuto->mostrarInformacion();

// Acelerar el auto
$miAuto->acelerar(50);

// Frenar el auto
$miAuto->frenar(20);

// Mostrar información final
$miAuto->mostrarInformacion();
?>
