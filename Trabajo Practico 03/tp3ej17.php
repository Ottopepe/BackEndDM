Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un
algoritmo que le permita registrar el tiempo empleado en cada recorrido, al final del proceso el
algoritmo debería mostrar el promedio de los tiempos empleados. También necesita saber cuántas
veces su tiempo fue menor a valor dado y cuál fue su mejor tiempo realizado.

<?php 
$RecordAnterior = readline("Ingrese el valor de sus Record Anterior");
$ContadorRompRecord =0;
$acumulador=0;
$contador=0;
$min=PHP_INT_MAX;
$menortiempo;
$primeraVez =true;

do {
    $tiempo = readline("Ingrese el tiempo de esta vuelta");
    if ($tiempo<$RecordAnterior) {
        $ContadorRompRecord++;
    }
    if ($primeraVez) {
       $menortiempo=$tiempo;
    } else if ($tiempo<$menortiempo){
        $menortiempo=$tiempo;
    }
    $acumulador+=$tiempo;
    $contador++;
    
   $respuesta =readline("Desea Ingresar mas datos? (S/N)");
} while ($a <= 10);
$promedio = $acumulador/$contador;
echo "El record anterior ha sido superado $ContadorRompRecord veces";
echo "El promedio de tiempos realizados fue : $promedio";
echo "El menor tiempo realizado fue: $menortiempo";

?>  