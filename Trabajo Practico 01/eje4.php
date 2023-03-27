<?php
$a = 20;
$b = $a;
$c = 15;
$d = 10;
var_dump((($a == $b) || ($b > $c)) || ($c < $d));