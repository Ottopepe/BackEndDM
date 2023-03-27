<?php
/*Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los
positivos y la media de los negativos

PromedioPositivos = SumaPositivos / CantidadPositivos
PromedioNegativos = SumaNegativos / CantidadNegativos
Numero
 */

$SumaPositivos = 0;
$CantidadPositivos = 0;
$SumaNegativos = 0;
$CantidadNegativos = 0;
do {
    //Pedir el numero repetidas, sumar y contar
    $Numero = readline("Ingrese un numero: ");
    if ($Numero > 0) {
        $SumaPositivos += $Numero;
        $CantidadPositivos++;
    } elseif ($Numero < 0) {
        $SumaNegativos += $Numero;
        $CantidadNegativos++;
    }
} while ($Numero != 0);

$PromedioPositivos = ($CantidadPositivos != 0) ? $SumaPositivos / $CantidadPositivos : 0;
$PromedioNegativos = ($CantidadNegativos != 0) ? $SumaNegativos / $CantidadNegativos : 0;
echo "el promedio de positivos es: $PromedioPositivos" . PHP_EOL;
echo "el promedio de negativos es: $PromedioNegativos" . PHP_EOL;
$PorcentajePositivos = 100 * $CantidadPositivos / ($CantidadPositivos + $CantidadNegativos);
$PorcentajeNegativos = 100 * $CantidadNegativos / ($CantidadPositivos + $CantidadNegativos);
echo "El porcentaje de numeros positivos ingresados es: %$PorcentajePositivos" . PHP_EOL;
echo "El porcentaje de numeros negativos ingresados es: %$PorcentajeNegativos" . PHP_EOL;
