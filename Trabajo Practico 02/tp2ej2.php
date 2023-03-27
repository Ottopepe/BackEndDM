<?php

/*
Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en
su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor
o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a
3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación
es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente.
 */

/*

Carrera: Vespertina o Diurna
Vespertina:
Nota: >=6 entonces exime
Nota: >=3.5 entonces rinde examen
Nota: <3.5 entonces reprueba
Diurna:
Nota: >=3.5 entonces rinde examen
Nota: <3.5 entonces reprueba
 */
$nota = readline("Ingrese nota: ");
$carrera = readline("Ingrese carrera: ");
if ($carrera == "Vespertina") {
    if ($nota >= 6) {
        echo "Exime";
    } elseif ($nota >= 3.5) {
        echo "Rinde examen";
    } else {
        echo "Reprueba";
    }
} elseif ($carrera == "diurna") { // Cuando la carrera es diurna
    if ($nota >= 3.5) {
        echo "Rinde examen";
    } else {
        echo "Reprueba";
    }
}
