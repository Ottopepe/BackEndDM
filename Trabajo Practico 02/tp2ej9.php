<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp2ej9.php" method="get">

ingrese nombre <input type="text" name="name" id=""><br>
ingrese nota <input type="number" name="nota" id=""><br>

<input type="submit" value="enviar">
</form>

<?php

$nota = $_GET['nota'];
$nombre = $_GET['name'];
if (isset($nombre)) {
    switch ($nota) {
        case 10:
            echo "$nombre, su nota es: $nota, su calificación es Sobresaliente";
            break;
        case 9:
        case 8:
            echo "$nombre, su nota es: $nota, su calificación es Distinguido";
            break;
        case 7:
        case 6:
            echo "$nombre, su nota es: $nota, su calificación es Bueno";
            break;
        case 5:
        case 4:
            echo "$nombre, su nota es: $nota, su calificación es Suficiente";
            break;
        case 3:
        case 2:
        case 1:
            echo "$nombre, su nota es: $nota, su calificación es Insuficiente";
            break;
        case 0:
            echo "$nombre, su nota es: $nota, su calificación es Reprobado";
            break;
        default:
            echo "ingrese una nota valida";
            break;
    }
}
?>

</body>
</html>