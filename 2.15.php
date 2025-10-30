<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero_original = 12345;

$numero_temporal = $numero_original;

$suma = 0;

echo "Calculando la suma de los dígitos de $numero_original...<br>";

while ($numero_temporal > 0) {
    
    $digito = $numero_temporal % 10;
    
    $suma += $digito;
    
    $numero_temporal = (int)($numero_temporal / 10);
}

echo "-----------------------------------<br>";
echo "La suma total de los dígitos es: $suma";

?>

</body>
</html>