<?php

/* Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo 
zodiacal.  */

$dia = readline('ingrese el dia: ');
$mes = readline('ingrese el mes: ');
$anio = readline('ingrese el anio: ');

if($dia>0 && $dia<32){
    if($anio>2000){
        switch($mes){
            case 1:$mes="enero"; break;
            case 2:$mes="febrero"; break;
            case 3:$mes="marzo"; break;
            case 4:$mes="abril"; break;
            case 5:$mes="mayo"; break;
            case 6:$mes="junio"; break;
            case 7:$mes="julio"; break;
            case 8:$mes="agosto"; break;
            case 9:$mes="septiembre"; break;
            case 10:$mes="octubre"; break;
            case 11:$mes="noviembre"; break;
            case 12:$mes="diciembre"; break;
            default: echo "mes incorrecto";
        }
        echo "$dia-$mes-$anio";
    } else{
        echo "Año erroneo";
    }
} else {
    echo "día erroneo";
}