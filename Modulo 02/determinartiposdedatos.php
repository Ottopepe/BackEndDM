<?php

// -------------------------------------------------
// -- Determinar los tipos de datos de las variables.
// -------------------------------------------------

define('UNA_CONSTANTE', 'Una constante');
$TipoDeDato1 = "123";
$TipoDeDato2 = 0;
$TipoDeDato3 = 123;
$TipoDeDato4 = 1.0;

echo "El primer dato: $TipoDeDato1 es entero si devuelve 1: " . is_int($TipoDeDato1) . "<br>";
echo "El segundo dato: $TipoDeDato2  es booleano si devuelve 1: " . is_bool($TipoDeDato2) . "<br>";
echo "El tercer dato: $TipoDeDato3 es cadena si devuelve 1: " . is_string($TipoDeDato3) . "<br>";
echo "El cuarto dato: $TipoDeDato4 es flotante si devuelve 1: " . is_float($TipoDeDato4) . "<br>";
echo "El quinto dato: $TipoDeDato5 es constante si devuelve 1: " . defined('UNA_CONSTANTE');

/*

-------------------------------------------------
-- SOLO DEBES MODIFICAR EL CODIGO QUE ESTA EN LA PARTE SUPERIOR
-------------------------------------------------

En el codigo que esta a continuación se han utilizado algunas
Funciones incorporadas (por PHP) para determinar el tipo de dato de una variable:

is_int($var);
is_bool($var);
is_string($var);
is_float($var);

defined('UNA_CONSTANTE');
 */