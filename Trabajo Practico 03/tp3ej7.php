<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp3ej7.php" method="get">
    A: <input type="number" name="A" ><br>
    B: <input type="number" name="B" ><br>
    <input type="submit">
</form>
    <?php
/*Realizar la operación de potenciación (a^b), de dos valores enteros positivos, con multiplicaciones.
$A = $_GET['A']; // 2 --> 2*2*2*2 = 16
$B = $_GET['B']; // 4
 */
$A = $_GET['A'];
$B = $_GET['B'];
$M = 1;
for ($contador = 0; $contador < $B; $contador++) {
    $M = $M * $A;
    echo "<br> resultados parciales: $M";
}
echo "<br>  $A elevado $B es: " . $M;

?>
</body>
</html>
