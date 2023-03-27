<?php

// --------------------------------
// -- FUNCIONES
// --------------------------------

/*

La funcion es:

- Un bloque de código

- Realiza una tarea especifica

- Son re utilizadas en nuestro programas

 */

// --------------------------------
// -- Creación de funciones
// --------------------------------

/*

- Todas las funciones comienzan con la palabra clave "function" seguida del nombre que se quiera dar.

- Cuanto más específico sea el nombre, mejor.

- Después del nombre proporcionamos un conjunto de paréntesis de apertura/cierre.

- Terminamos la función con un conjunto de llaves.

- Dentro de las llaves ponemos el código que queremos reutilizar.

- Buena Practica utilizar la notación camelCase

Ejemplo =

function NombreFuncion() {
// Código
}

 */

/* function bienvenidaAlUsuario() {
    echo "Bienvenid@ a nuestra pagina <br>";
} */

// --------------------------------
// -- Pasaje de parámetros
// --------------------------------

/*
Los parámetros o argumentos pueden ser aceptados por las funciones.
Esos parámetros o valores se utilizan como parte del código de las funciones.
 */

/* function bienvenidaAlUsuario($nombre) {
    echo "Bienvenid@ $nombre a nuestra pagina <br>";
} */

function menu(){
    do{
        echo "opcion 1: dar bienvenida al usuario";
        echo "opcion 2: Mostrar animacion";
        echo "opcion 3: cerrar el programa";
        $opc = readline("Ingrese su opcion: ");
        if($opc == 1){
            $usuario = readline("ingrese su nombre");
            bienvenidaAlUsuario($usuario);
        }
    }while ($opc != 3);
}

$usuario1 = "fabio";
$usuario2 = "pablo";
$usuario3 = "paola";

bienvenidaAlUsuario($usuario1);
bienvenidaAlUsuario($usuario2);
bienvenidaAlUsuario($usuario3);

/* menu(); */

// --------------------------------
// -- Parámetros por defecto u opcional
// --------------------------------

/*
Si un parámetro específico no se pasa siempre o si quiere que un
valor por defecto, pero permite las opciones para cambiarlo más tarde en
el programa, puede establecer los parámetros por defecto.
 */

function bienvenidaAlUsuario($nombre = "Invitad@") {
    $nombre = ($nombre=="") ? "invitad@" : $nombre;
    echo "Bienvenid@ $nombre a nuestra pagina <br>";
}

$usuario = "";
bienvenidaAlUsuario($usuario);

// --------------------------------
// -- Ambito de Variable - Alcance - Scope Y Globales
// --------------------------------

$pepe = "mi variable global"; // Declaración de variable en un ambito global

function prueba(){ // Dentro de la función tengo un ambito local
    global $varLocal; // Declaración de variable en un ambito global
    $varLocal = "mi variable local"; // Declaración de variable en un ambito local
    echo $varLocal."<br>";
    echo $GLOBALS['pepe']."<br>";
}

prueba();
echo $varLocal."<br>";

// Crear la suma de dos numeros

// El simbolo ampersand & --> Permite cambiar el valor del parametro
function suma(&$a,$b){
    $a++;
    return $a + $b;
}

$a = 4;
echo "la suma es = " . suma($a,5) . "<br>";
echo "la suma es = " . suma(12,15). "<br>";
echo $a;

//Crear una funcion para sumar todos los numeros que nos pasen
// El bucle para recorrer es el foreach

function sumar(...$nros){
    $suma = 0;
    foreach ($nros as $nro){ // del conjunto en plural, tomo en el 'as' el singular del conjunto
        $suma +=  $nro;
        /*
        $suma = 0 + 4;
        $suma = 4 + 5;
        $suma = 9 + 6;
        $suma = 15 + 7;
        $suma = 22 + 8;
        $suma = 30 + 9;
        */
    }
    return $suma;
};

echo sumar(4,5,6,7,8,9);

/* echo "La suma de tres valores es = " . sumar(4,5,6) . "<br>";
echo "La suma de cuatro valores es = " . sumar(4,5,6,7) . "<br>";
 */