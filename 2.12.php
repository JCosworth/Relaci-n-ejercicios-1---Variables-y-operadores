<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$terminos = 15;

$n1 = 0;
$n2 = 1;

echo "Los primeros $terminos términos de la secuencia de Fibonacci:<br>";
echo "--------------------------------------------------------<br>";

echo $n1 . "<br>";
echo $n2 . "<br>";

for ($i = 2; $i < $terminos; $i++) {
    
    $siguiente = $n1 + $n2;
    
    echo $siguiente . "<br>";
    
    $n1 = $n2;
    $n2 = $siguiente;
}

?>

</body>
</html>