<?php
/*Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas.*/

// 11/5 = 11-5-5
// A/B = A-B-B-B while(A>=B)

$A = readline('Ingrese el valor de A: ');
$B = readline('Ingrese el valor de B: ');

$cont = 0;
$resto = $A;

while($resto>=$B){
    $resto-=$B; // $resta=resta-$B
    $cont++;
}

echo "Resto = $resto";