<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$altura = 5;

echo "Dibujando un triángulo de $altura filas:<br>";
echo "-----------------------------------<br>";

for ($fila = 1; $fila <= $altura; $fila++) {
    
    for ($col = 1; $col <= $fila; $col++) {
        echo "*";
    }
    
    echo "<br>";
}

?>

</body>
</html>