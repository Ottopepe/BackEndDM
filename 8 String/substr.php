<?php

// --------------------------------
// -- substr() - SUBSTRing | SUB cadena
// --------------------------------

/*
Esta función tomará una cadena y creará una subcadena a partir de las ubicaciones específicas que usted proporcione.

Esta función toma dos parámetros, con la opción de un tercero.
1. Cadena a manipular
2. Ubicación inicial de la subcadena. (0 es el principio)
3. Opcional: Cuántos caracteres quiere tomar.
 */

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";
//         012345678901234567890123456789
//                   1         2         3

$subcadena = substr($tigres, 20); // Muestra la subcadena desde la posición 20 hasta el final
$subcadena = substr($tigres, 20, 10); // Muestra la subcadena desde la posición 20 y tomando 10 caracteres

echo $subcadena;
