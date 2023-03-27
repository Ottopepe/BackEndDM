<?php

/* Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar? */

/* [n1,n2,n3,n4]
suma=n1+n2+n3+n4
promedio=suma/cantidad 

Variable Contadora: Varia en una cantidad fija (1,2,3,4...)
    Cont=ValorInicial (Generalmente es 0)               FUERA DEL BUCLE
    Cont=Cont+1;                                        DENTRO DEL BUCLE
Variable Acumuladora: Varia en una cantidad variable y puede ser generalmente una suma pero tambien puede ser otra operación
    Acu=ValorInicial (Valor neutro de la operación)     FUERA DEL BUCLE
    Acu=Acu+X // Acu=Acu*X                              DENTRO DEL BUCLE
*/

echo "--------CALCULADOR DE PROMEDIOS----------" . PHP_EOL;
echo "PARA FINALIZAR INGRESE UN VALOR NEGATIVO" . PHP_EOL;

$nota = readline('Ingrese una nota: '). PHP_EOL;
$cont = 0;
$suma = 0;

/* while($nota>=0){
    $suma += $nota; //$suma=$suma+$nota;
    $cont++;        //$cont=$cont+1;
    $nota = readline('Ingrese una nota: ') . PHP_EOL;
} */

if ($nota>=0){
    do{
        $suma += $nota; //$suma=$suma+$nota;
        $cont++;        //$cont=$cont+1;
        $nota = readline('Ingrese una nota: ') . PHP_EOL;
    }while($nota>=0);
}

$promedio = ($cont) ? $suma/$cont : "error";
echo "Su promedio es: $promedio";
