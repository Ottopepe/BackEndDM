<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp2ej8.php" method="get">

Precio del producto: $<input type="number" name="precio" value=""><br>

<input type="radio" name="bola" value="blanco">blanco<br>
<input type="radio" name="bola" value="amarillo">amarillo<br>
<input type="radio" name="bola" value="azul">azul<br>
<input type="radio" name="bola" value="naranja">naranja<br>
<input type="radio" name="bola" value="verde">verde<br>

<input type="submit">
</form>

<?php
switch ($_GET['bola']) {
    case "blanco":
        echo "usted no pesee ningun descuento ";
        $precio = $_GET['precio'];
        break;
    case "amarillo":
        echo "usted tiene un descuento del 25% en su compra ";
        $precio = $_GET['precio'] * 0.75;
        break;
    case "azul":
        echo "usted posee un 50% de descuento en su compra ";
        $precio = $_GET['precio'] * 0.5;
        break;
    case "naranja":
        echo "usted posee un descuento del 100% en su compra ";
        $precio = $_GET['precio'] * 0;
        break;
    case "verde":
        echo "usted posee un descuento del 10% en su compra ";
        $precio = $_GET['precio'] * 0.9;
        break;
    default:
        echo "Debe seleccionar un color ";
        break;
}
echo "<br> El precio final es: $ $precio";
?>
</body>
</html>