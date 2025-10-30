<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dia_numero = 4;

echo "Número recibido: $dia_numero<br>";
echo "-----------------------<br>";

switch ($dia_numero) {
    case 1: 
        echo "Es Lunes.";
        break; 
    case 2:
        echo "Es Martes.";
        break;
    case 3:
        echo "Es Miércoles.";
        break;
    case 4:
        echo "Es Jueves.";
        break;
    case 5:
        echo "Es Viernes.";
        break;
    case 6:
        echo "Es Sábado.";
        break;
    case 7:
        echo "Es Domingo.";
        break;
    default:
        echo "Error: El número no está en el rango válido (1 al 7).";
        break;
}

?>

</body>
</html>