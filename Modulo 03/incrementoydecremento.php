<?php

// --------------------------------
// -- Operadores de incremento y decremento ~ ++, --
// --------------------------------

/*

Aumentar (++) o disminuir (--) un valor en 1

 */

$incrementadora = 10;
// Pre Incremento el ++ se ejecuta antes de la función echo
echo ++$incrementadora; //11
echo "<br>";
// Post Incremento el ++ se ejecuta luego de la función echo
echo $incrementadora++; // muestra 11 pero el valor de la variable es 12
echo "<br>";
// No hacemos nada  y mostramos la variable
echo $incrementadora; //12
echo "<br>";

$decrementadora = 10;
// Pre Decremento el -- se ejecuta antes de la función echo
echo --$decrementadora; // 9
echo "<br>";
// Post Decremento el -- se ejecuta luego de la función echo
echo $decrementadora--; // muestra 9 pero el valor de la variable es 8
echo "<br>";
// No hacemos nada  y mostramos la variable
echo $decrementadora; //8
echo "<br>";