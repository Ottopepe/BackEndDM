<?php

// --------------------------------
// -- Cambio de Mayusculas - strToUpper - strToLower
// --------------------------------

/*
Cambia todos los caracteres a mayúsculas o a minúsculas
Estas funciones toman cada una un parámetro.
1. Cadena a la que se le cambiarán las mayúsculas y minúsculas.
 */

$tigres = "tres tRiStes tIgrEs, traGabAn trIgO en un trIgal, en tRes triStes trastos, tragaban trigo tres tristes tigres.";
    //     0123456789-
$tigresAMayusculas = strToUpPer($tigres);
$tigresAMinusculas = strToLoWer($tigres);

echo "La frase original es: " . $tigres . "<br><br>";
echo "La frase en mayusculas es: " . $tigresAMayusculas . "<br><br>";
echo "La frase en minusculas es: " . $tigresAMinusculas . "<br><br>";
$tigres[10] = "X"; //cambia el caracter en la posición 10 por "X"
echo $tigres . "<br><br>";
$tigres[0] = strtoupper($tigres[0]);//cambia el primer caracter por mayuscula
echo $tigres[80]. "<br><br>";
$longitud = strlen($tigres);
echo "la frase tiene $longitud caracteres";
