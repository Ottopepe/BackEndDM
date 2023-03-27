<?php

/*
A>B>C ($A>$B && $A>$C && $B>$C)
A>C>B ($A>$B && $A>$C && $C>$B)
B>A>C
B>C>A
C>A>B
C>B>A
 */

$A = readline("Ingrese A: ");
$B = readline("Ingrese B: ");
$C = readline("Ingrese C: ");
if ($A > $B && $A > $C && $B > $C) {
    echo "A>B>C";
} else if ($A > $B && $A > $C && $C > $B) {
    echo "A>C>B";
} else if ($B > $A && $B > $C && $A > $C) {
    echo "B>A>C";
} else if ($B > $A && $B > $C && $C > $A) {
    echo "B>C>A";
} else if ($C > $A && $C > $B && $A > $B) {
    echo "C>A>B";
} else if ($C > $A && $C > $B && $B > $A) {
    echo "C>B>A";
}
