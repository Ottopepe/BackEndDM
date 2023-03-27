<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp2ej1.php" method="post">
    <input type="number" step=0.001 name="N">
    <input type="submit" name="submit">
</form>
<?php

/*
Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es
par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.
 */

$N = $_POST['N'];

if ($N > 0) {
    echo "El numero es positivo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N < 0) {
    echo "El numero es negativo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N == 0) {
    echo "El numero es cero";
} else {
    echo "El numero no es valido";
}
echo "<br>";
echo "el numero es: " . $N;
?>
</body>
</html>

