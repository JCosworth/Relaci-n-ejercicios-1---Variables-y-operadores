<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "Números pares del 1 al 50 (Método 1):<br>";
echo "-------------------------------------<br>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

?>

</body>
</html>