<?php

/*

|\
| \  B
A  |  \
|   \
______
C

Equilatero = 3 lados iguales ($A == $B && $B == $C)
Isosceles = 2 lados iguales ($A == $B || $B == $C || $A == $C)
Escaleno = 3 lados diferentes else
 */

$A = readline("Ingrese A: ");
$B = readline("Ingrese B: ");
$C = readline("Ingrese C: ");
if ($A == $B && $B == $C) {
    echo "Equilatero";
} else if ($A == $B || $B == $C || $A == $C) {
    echo "Isosceles";
} else {
    echo "Escaleno";
}
