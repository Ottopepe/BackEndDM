<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tp3ej11.php" method="get">
    N1: <input type="number" name="N 1" ><br>
    N2: <input type="number" name="N2" ><br>
    N3: <input type="number" name="N3" ><br>
    N4: <input type="number" name="N4" ><br>
    N5: <input type="number" name="N5" ><br>

<input type="submit">
    </form>
    <?php
/*
1! = 1
2! = 1*2
3! = 1*2*3
N! = (N-1)!*N
 */
$Numeros = [$_GET['N1'], $_GET['N2'], $_GET['N3'], $_GET['N4'], $_GET['N5']];
foreach ($Numeros as $N) {
    $acu = 1;
    for ($i = 1; $i <= $N; $i++) {
        $acu *= $i;
    }
    --$i;
    echo "El factorial de $i es: $acu <br> ";
}

?>

</body>
</html>
<?php
