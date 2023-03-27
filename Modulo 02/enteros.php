<?php

// --------------------------------
// -- Números Enteros
// --------------------------------

$nroEnteroPositivo = 123; // Esto es una declaracion de variable de tipo entero
$nroEnteroNegativo = -123; // Esto es una declaracion de variable de tipo entero negativo
var_dump($nroEnteroPositivo); //var dump nos permite ver el tipo de dato asociado
var_dump($nroEnteroNegativo);

// rango típico (aprox.)
// -2147483648 a 2147483648 (sistema de 32 bits)
// -9E18 a 9E18 (sistema de 64 bits)

// Si el entero es demasiado largo el compilador lo cambiará automáticamente a reales.
$nroMuyLargo = 9999999999999978 * 912345678912345 * 6789123456789123456789123456789123456789123456789123456789123456789123456789123456789;
var_dump($nroMuyLargo);

$suma = 1 + 2;
$resta = 1 - 2;
$multiplicacion = 1 * 2;
$division = 1 / 2;
$modulo = 1 % 2;