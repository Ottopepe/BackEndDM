<?php
/*
Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo
nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000.
 */

$dia = readline("ingrese dia:");
$mes = readline("ingrese mes:");
$anio = readline("ingrese año:");

if ($dia >= 1 && $dia <= 31 && $mes > 0 && $mes < 13 && $anio > 2000) {
    switch ($mes) {
        case 1:
            echo "$dia-enero-$anio";
            break;
        case 2:
            echo "$dia-febrero-$anio";
            break;
        case 3:
            echo "$dia-marzo-$anio";
            break;
        case 4:
            echo "$dia-abril-$anio";
            break;
        case 5:
            echo "$dia-mayo-$anio";
            break;
        case 6:
            echo "$dia-junio-$anio";
            break;
        case 7:
            echo "$dia-julio-$anio";
            break;
        case 8:
            echo "$dia-agosto-$anio";
            break;
        case 9:
            echo "$dia-septiembre-$anio";
            break;
        case 10:
            echo "$dia-octubre-$anio";
            break;
        case 11:
            echo "$dia-noviembre-$anio";
            break;
        case 12:
            echo "$dia-diciembre-$anio";
            break;
    }
} else {
    echo "Datos de la fecha invalida.";
}
