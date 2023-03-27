<?php

// --------------------------------
// -- Constantes
// --------------------------------

// Solo los valores escalares pueden ser constantes (por ejemplo: Boolean, integer, float, y string)

define('NUEVA_CONSTANTE', 'Valor de la constante'); // Esto es una constante de cadena
define('CONSTANTE_NUMERO', 1234); // Esto es una constante numerica
define('CONSTANTE_FLOAT', 12.34); // Esto es una constante con punto flotante
define('CONSTANTE_BOOLEANA', true); // Esto es una constante booleana

echo NUEVA_CONSTANTE . "<br>"; // Esto es un echo de una constante Notar que no lleva el simbolo $
echo CONSTANTE_NUMERO . "<br>"; // Esto es un echo de una constante
echo CONSTANTE_FLOAT . "<br>"; // Esto es un echo de una constante
echo CONSTANTE_BOOLEANA . "<br>"; // Esto es un echo de una constante

echo NUEVA_CONSTANTE . "<br>" . CONSTANTE_NUMERO . "<br>" . CONSTANTE_BOOLEANA; // Esto es un echo de varias constantes