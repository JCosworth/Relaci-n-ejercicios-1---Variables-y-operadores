<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dia_actual = 29;
$mes_actual = 10;
$ano_actual = 2025;

$dia_nacimiento = 30;
$mes_nacimiento = 10;
$ano_nacimiento = 2007;

echo "Fecha actual: $dia_actual/$mes_actual/$ano_actual<br>";
echo "Fecha de nacimiento: $dia_nacimiento/$mes_nacimiento/$ano_nacimiento<br>";

$edad = $ano_actual - $ano_nacimiento;

if ($mes_actual < $mes_nacimiento) {
    $edad--;
} elseif ($mes_actual == $mes_nacimiento) {
    if ($dia_actual < $dia_nacimiento) {
        $edad--;
    }
}

echo "-----------------------<br>";
echo "Edad calculada: $edad años.<br>";

if ($edad >= 18) {
    echo "Resultado: Es MAYOR de edad.";
} else {
    echo "Resultado: Es MENOR de edad.";
}

?>

</body>
</html>