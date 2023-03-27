<?php

// --------------------------------
// -- Tipos de Datos Booleanos
// --------------------------------

$valorVerdadero = true; // tiene valor verdadero
$valorFalso = false; // tiene valor falso

var_dump($valorVerdadero);
echo "<br>";
echo $valorVerdadero;
echo "<br>";
var_dump($valorFalso);
echo "<br>";
echo $valorFalso;
echo "<br>";

$tieneValor = 15641981; // tiene valor verdadero
echo "Tiene valor vale 15641981: " . (bool) $tieneValor . "<br>";

$noTieneValor = 00000; // tiene valor falso
echo "No tiene valor vale 00000: " . (bool) $noTieneValor . "<br>"; // muestra nada, EL FALSO NO DEVUELVE VALOR

$tieneValorCadena = "Cadena"; // tiene valor verdadero
echo "La cadena en formato booleano: " . (bool) $tieneValorCadena . "<br>";
$noTieneValorCadena = ""; // tiene valor falso
echo "La cadena vacia en formato booleano: " . (bool) $noTieneValorCadena . "<br>";

$cadenaNumerica = "123.12";
$cadenaNumerica2 = "321";
$numero = $cadenaNumerica + $cadenaNumerica2;
var_dump($numero);

/*

Estos valores tambien se evaluan como falsos:

- Un array (arreglo) vacio
- Un objeto sin valores o funciones

 */