<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8: Búsqueda de un Valor</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        h1 {
            color: #1d4ed8; /* Un azul más intenso */
            border-bottom: 2px solid #dbeafe;
            padding-bottom: 10px;
        }
        p {
            line-height: 1.6;
        }
        code {
            background-color: #eef2ff;
            color: #4338ca;
            padding: 4px 8px;
            border-radius: 5px;
            font-family: "Courier New", Courier, monospace;
            font-size: 1.1em;
        }
        .resultado {
            font-size: 1.2em;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid;
            margin-top: 10px;
        }
        /* Clases para 'encontrado' y 'no-encontrado' */
        .encontrado {
            color: #166534; /* Verde oscuro */
            background-color: #f0fdf4;
            border-color: #bbf7d0;
        }
        .no-encontrado {
            color: #991b1b; /* Rojo oscuro */
            background-color: #fef2f2;
            border-color: #fecaca;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 8: Búsqueda de un valor (con Función)</h1>
        <p>Crea una función que reciba un array y un valor, y devuelva true si el valor está en el array, o false si no lo está.</p>
        <hr>

        <?php
        
        // --- 1. DEFINICIÓN DE LA FUNCIÓN ---
        
        /**
         * Busca un valor dentro de un array.
         *
         * @param array $array El array donde buscar.
         * @param mixed $valor_buscado El valor a encontrar.
         * @return bool True si se encuentra, False si no.
         */
        function buscarValorEnArray($array, $valor_buscado) {
            // Recorremos el array
            foreach ($array as $elemento) {
                // Comparamos cada elemento con el valor buscado
                if ($elemento === $valor_buscado) {
                    // ¡Encontrado! Devolvemos 'true' y la función termina.
                    return true;
                }
            }
            
            // Si el bucle termina y NUNCA entramos en el 'if',
            // significa que no se encontró. Devolvemos 'false'.
            return false;
        }

        // --- 2. USO DE LA FUNCIÓN ---
        
        // Datos de prueba
        $mi_array = [10, 20, 30, 40, 50];
        $valor1 = 30; // Valor que SÍ está
        $valor2 = 99; // Valor que NO está

        echo "<p>El array de prueba es: <code>[" . implode(", ", $mi_array) . "]</code></p>";
        
        // --- Prueba 1 ---
        echo "<h3>Prueba 1: Buscando el valor <code>$valor1</code></h3>";
        $resultado1 = buscarValorEnArray($mi_array, $valor1);

        if ($resultado1) {
            echo "<p class='resultado encontrado'>Resultado: ¡Encontrado! (La función devolvió 'true')</p>";
        } else {
            echo "<p class='resultado no-encontrado'>Resultado: No encontrado (La función devolvió 'false')</p>";
        }
        
        // --- Prueba 2 ---
        echo "<h3>Prueba 2: Buscando el valor <code>$valor2</code></h3>";
        $resultado2 = buscarValorEnArray($mi_array, $valor2);
        
        if ($resultado2) {
            echo "<p class='resultado encontrado'>Resultado: ¡Encontrado! (La función devolvió 'true')</p>";
        } else {
            echo "<p class='resultado no-encontrado'>Resultado: No encontrado (La función devolvió 'false')</p>";
        }
        ?>

    </div>

</body>
</html>