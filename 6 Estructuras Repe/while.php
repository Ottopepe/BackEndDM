<?php
// --------------------------------
// -- Bucle While - Do While
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión lógica)
{
//código
}
*/

/* while(true){ // Bucle infinito: No ejecuten esto
    echo "hola mundo";
} 

SIEMPRE EJECUTA EL CODIGO AL MENOS UNA VEZ
do{
//código
}while(expresión);

repeat{
    //código
}until(!expresión);
*/


while(false){ // bucle que nunca se ejecuta
    echo "hola mundo";
}

//Bucle con un $contador
echo " ---- while ----" . PHP_EOL;

$contador = 11;
while ($contador <= 10) {
    echo "contador = $contador". PHP_EOL;
    $contador++;
    // if($contador == 8){ break; } Permite cortar la ejecución del while
}

echo "----do while---- " . PHP_EOL;

do {
    echo "contador = $contador". PHP_EOL;
    $contador++;
} while ($contador <= 10);