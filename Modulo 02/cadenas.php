<?php

// --------------------------------
// -- Tipos de Datos de Cadena de Caracteres
// --------------------------------

$unaCadenaDobleComillas = "Cadena con 'comillas' dobles";
echo $unaCadenaDobleComillas; // Doble comilla = Shift + 2 = " ; Shift + Al lado de la Ñ
echo "<br>"; // Salto de linea
$unaCadenaSimple = 'Cadena con "comillas" simples'; // comilla simple tecla a la derecha del 0
echo $unaCadenaSimple;
echo "<br>"; // Salto de linea

$cadena1 = "Hola";
echo "Soy la cadena1: " . $cadena1 . "<br>";
$cadena2 = "Mundo !";
echo "Soy la cadena2: " . $cadena2 . "<br>";
$cadena3 = $cadena1 . ' ' . $cadena2; // El simbolo punto hace una concatenacion de cadenas
echo "Soy la cadena3: " . $cadena3 . "<br>";