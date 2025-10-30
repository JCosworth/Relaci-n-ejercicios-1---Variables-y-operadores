<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$calificacion = 89;

echo "Calificación numérica: $calificacion<br>";
echo "-----------------------<br>";

if ($calificacion >= 90 && $calificacion <= 100) {
    echo "Calificación en letra: A";
} elseif ($calificacion >= 80 && $calificacion < 90) { 
    echo "Calificación en letra: B";
} elseif ($calificacion >= 70 && $calificacion < 80) { 
    echo "Calificación en letra: C";
} elseif ($calificacion >= 60 && $calificacion < 70) { 
    echo "Calificación en letra: D";
} elseif ($calificacion >= 0 && $calificacion < 60) { 
    echo "Calificación en letra: F";
} else {
    echo "Error: La calificación '$calificacion' está fuera del rango válido (0-100).";
}

?>

</body>
</html>