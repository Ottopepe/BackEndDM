<?php

// --------------------------------
// --  La función print()
// --------------------------------

# Puede ser utilizada con o sin parentesis pero siempre con un solo parametro
define("BR","<br>");

print('cadenaSimple'."cadenaDoble"). BR;

print 'cadenaSimple'."cadenaDoble".BR;

echo "cadena1", 'cadena2', "cadena3". BR;

// Nos permiten crear cadenas de multiples lineas
print "Lorem ipsum dolor,
 sit amet consectetur adipisicing elit.
 Sed molestias obcaecati temporibus perferendis
 commodi vero omnis eos consectetur dolore nisi
 cumque quia qui, vel recusandae doloribus laborer
 placeat voluptate. Quas." . BR;

$algo = "algo";
$unaCadenaCompuesta = "La \"amiga\" de D'alessandro \t lo acompaño $algo al partido"; // alt + 92 = \
$otraCadenaCompuesta = 'La "amiga" de D\'alessandro lo acompaño'. $algo .'al partido'; // alt + 92 = \

echo $unaCadenaCompuesta . "\t";
echo $otraCadenaCompuesta;