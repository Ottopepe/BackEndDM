<?php

// --------------------------------
// -- strpos() - STRing POSition | Posición de un caracter en una cadena
// --------------------------------

/*
Esta función determina si un caracter o cadena existe dentro de otra cadena

y toma dos parametros obligatorios y un parametro opcional:

1. la cadena de texto en la que buscar
2. el/los caracteres que desee buscar en la cadena 1.
3. opcional: la posición en la que comenzar a buscar.

 */

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";
//         012345678901234567890123456789012345678901234567890123
//                   1         2         3         4         5

echo strlen($tigres); // Muestra la longitud de la cadena
echo "<br>";
echo strpos($tigres, "tres"); 
echo "<br>";
echo strpos($tigres, "tres", 1); 
echo "<br>";
echo strpos($tigres, " ", 5); 
echo "<br>";
echo strpos($tigres, "tres", 54); 
echo "<br>";
echo var_dump(strpos($tigres, "tres", 91));
