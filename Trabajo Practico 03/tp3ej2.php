<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp3ej2.php" method="get">
    A: <input type="number" name="A" ><br>
    B: <input type="number" name="B" ><br>
    <input type="submit">
    </form>
    <?php
$A = $_GET['A']; // 2 --> 2+2+2+2+2+2+2+2+2+2+2+2+2 = 8
$B = $_GET['B']; // 100 --> 100+100= 200
$suma = 0;
if ($B < $A) { // intercambio de variables
    $temp = $A;
    $A = $B;
    $B = $temp;
}
for ($contador = 0; $contador < $A; $contador++) {
    $suma += $B;
    echo "<br> resultados parciales: $suma";
}
echo "<br> La multiplación de $A x $B es: " . $suma;

?>
</body>
</html>
