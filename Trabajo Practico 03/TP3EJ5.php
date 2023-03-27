<?php

/* Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente
hasta 2. */

$N = readline("Ingrese un n° par: ");
if ($N % 2 == 0) {
    /* while($N>=2){
        echo $N . PHP_EOL;
        $N-=2;
    } */
    for(;$N>=2;$N-=2) echo $N . PHP_EOL;
} else {
    echo "El numero ingresado es impar.";
}