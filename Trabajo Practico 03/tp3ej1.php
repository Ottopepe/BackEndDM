<?php

/* Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar? */

$suma = 0;
$contador = 0;

do {
    $nota = readline("Ingrese una nota: ");
    if ($nota >= 0) {
        $suma += $nota; //$suma=$suma+$nota;
        $contador++; //$contador=$contador+1;
    }
} while ($nota > 0);
$resultado = $suma / $contador;
echo "El promedio es: " . $resultado;
