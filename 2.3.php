<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$num1 = 20;
$num2 = 20;

echo "Número 1: $num1<br>";
echo "Número 2: $num2<br>";
echo "-----------------------<br>";

if ($num1 > $num2) {
    echo "El número mayor es: $num1";
} elseif ($num2 > $num1) {
    echo "El número mayor es: $num2";
} else {
    echo "Ambos números son iguales.";
}

?>

</body>
</html>