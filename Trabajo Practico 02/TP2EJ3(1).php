<?php
// Ordenar en forma creciente tres valores diferentes A, B, C

$A = readline('Ingrese el valor de la variable A: ');
$B = readline('Ingrese el valor de la variable B: ');
$C = readline('Ingrese el valor de la variable C: ');

if ($A ==$B || $B ==$C || $C ==$A) {
    echo "No debe ingresar numeros iguales";
}else {
    if($A>$B && $A>$C) { // A ES EL MAYOR DE TODOS
        if ($B>$C)
            echo "$C $B $A";
        else
            echo "$B $C $A";
    } elseif($B>$A && $B>$C) { // B ES EL MAYOR DE TODOS
        if ($A>$C)
            echo "$C $A $B";
        else
            echo "$A $C $B";
    } else { // C ES EL MAYOR DE TODOS
        if ($B>$A)
            echo "$A $B $C";
        else
            echo "$B $A $C";
    }
}