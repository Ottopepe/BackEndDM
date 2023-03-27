<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp3ej5.php" method="get">
    N: <input type="number" name="N" ><br>
    <input type="submit">
    </form>
    <?php
/* Imprimir los números pares desde N (siendo N un número par que se lee)
en forma descendente hasta 2.
N --> N-2 --> N-2
 */
$N = $_GET['N'];
if ($N % 2 != 0) {
    $N -= 1;
}
for ($i = $N; $i >= 2; $i -= 2) {
    echo $i . "<br>";
}

?>
</body>
</html>
<?php
