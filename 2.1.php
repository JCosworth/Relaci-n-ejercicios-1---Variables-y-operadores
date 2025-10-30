<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero = 5;

echo "El número a comprobar es: $numero<br>";

if ($numero > 0) {
    echo "Resultado: El número es POSITIVO.";
} elseif ($numero < 0) {
    echo "Resultado: El número es NEGATIVO.";
} else {
    echo "Resultado: El número es CERO.";
}

?>

</body>
</html>