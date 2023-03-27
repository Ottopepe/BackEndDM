<?php

// --------------------------------
// -- Bucle For - Para
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional(expresión lógica), que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

 */

/* $contador = 1;
while ($contador <= 10) {
    echo "contador = $contador". PHP_EOL;
    $contador++;
} */

for($contador = 1; $contador <= 10; $contador++){
    echo "contador = $contador". PHP_EOL;
}