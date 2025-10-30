<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero = 17;

$es_primo = true;

echo "Comprobando si $numero es primo...<br>";
echo "-----------------------------------<br>";

if ($numero <= 1) {
    $es_primo = false;
} else {
    for ($i = 2; $i < $numero; $i++) {
        
        if ($numero % $i == 0) {
            $es_primo = false;
            
            break;
        }
    }
}

if ($es_primo) {
    echo "Resultado: El número $numero SÍ es primo.";
} else {
    echo "Resultado: El número $numero NO es primo.";
}

?>

</body>
</html>