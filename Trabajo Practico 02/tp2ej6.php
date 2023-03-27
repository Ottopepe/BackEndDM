<?php
/*
Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo
zodiacal.
 */

$dia = readline("ingrese dia:");
$mes = readline("ingrese mes:");

if ($dia >= 1 && $dia <= 31) {
    switch ($mes) {
        case 1:
            if ($dia <= 20) {
                echo "Capricornio";
            } else {
                echo "Acuario";
            }
            break;
        case 2:
            if ($dia <= 19) {
                echo "Acuario";
            } else {
                echo "Piscis";
            }
            break;
        case 3:
            if ($dia <= 21) {
                echo "Piscis";
            } else {
                echo "Aries";
            }
            break;
        default:
            echo "Mes invalido";
    }
} else {
    echo "Dia invalido";
}
