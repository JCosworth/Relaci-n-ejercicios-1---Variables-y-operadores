<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$suma = 0;

echo "Calculando la suma de 1 + 2 + 3 + ... + 50<br>";
echo "-------------------------------------------<br>";

for ($i = 1; $i <= 50; $i++) {
    $suma += $i;
    
}

echo "La suma total de los primeros 50 números es: $suma";

?>

</body>
</html>