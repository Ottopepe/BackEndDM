<?php

$A = 1.0;
$B = 3.0;
$C = 4.0;

$F = (($A * $B) / sqrt($C)) / ($C - 1 / $B) - (2 * $C / $A);
echo $F . "<br>";

$G = (2 * $A - $B / sqrt($C)) / ($C + 1 / $B) * ($B / 4);
echo $G . "<br>";