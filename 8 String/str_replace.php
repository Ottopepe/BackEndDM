<?php

// --------------------------------
// -- str_replace()
// --------------------------------

/*
Esta función reemplazará ciertas ocurrencias en una cadena con el nuevo valor que se desee.

Esta función toma tres parámetros, con un cuarto opcional:
1. El valor que se busca en la cadena
2. El valor que se desea sustituir por el valor que se busca
3. La variable en la que se realiza la sustitución
4. Opcional: Cuántas ocurrencias se reemplazaron.
 */

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";

$panteras = str_replace("tigres", "panteras", $tigres, $cantidad);
echo $panteras . "<br><br>";
echo "cantidad de veces reemplazas la palabra tigre: " . $cantidad . "<br><br>";
$Tmayuscula = str_replace("t", "T", $tigres);
echo $Tmayuscula;
