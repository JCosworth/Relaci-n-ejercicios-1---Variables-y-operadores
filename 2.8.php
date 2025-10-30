<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero_base = 7;

echo "Tabla de multiplicar del $numero_base:<br>";
echo "------------------------------<br>";

for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
    
    $resultado = $numero_base * $multiplicador;
    
    echo "$numero_base x $multiplicador = $resultado<br>";
}

?>

</body>
</html>