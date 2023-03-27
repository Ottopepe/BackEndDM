<?php

/* Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres
algoritmos con cada estructura repetitiva. */

// 6*4 = 6+6+6+6 = 4+4+4+4+4+4 = 24
// A*B = A+A+A+A... = B+B+B+B+B... 
// 2*100 = 100+100 = 2+2+2+2+2+2+2+2+2+2+2+2+2...

$A = readline('Ingrese el valor de A: ');
$B = readline('Ingrese el valor de B: ');

/* $cont = 0;
$suma = 0; */

if($A>$B){ // Intercambio las variables
    $temp = $B;
    $B = $A;
    $A = $temp;
} 
if($A<0){
    $B *= -1;
    $A *= -1;
}
/* while($cont <$A){
    $suma+= $B;
    $cont++;
} */

/* if ($cont <$A)
do{
    $suma+= $B;
    $cont++;
}while($cont <$A); */

for($cont = 0, $suma = 0; $cont <$A; $cont++){
    $suma+= $B;
}

echo "$A x $B = $suma";