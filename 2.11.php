<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$n = 5;

$factorial = 1;

echo "Calculando el factorial de $n (¡$n!)<br>";
echo "-----------------------------------<br>";

if ($n == 0) {
    $factorial = 1;
} else {
    for ($i = $n; $i >= 1; $i--) {
        $factorial *= $i; // Es lo mismo que $factorial = $factorial * $i;
    }
}

echo "El factorial de $n es: $factorial";

?>

</body>
</html>