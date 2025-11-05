<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Máximo y Mínimo</title>
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
        /* Clases específicas para max y min */
        .max {
            color: #991b1b; /* Rojo oscuro */
            background-color: #fef2f2;
            border-color: #fecaca;
        }
        .min {
            color: #1e40af; /* Azul oscuro */
            background-color: #eff6ff;
            border-color: #bfdbfe;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 2: Encontrar el número máximo y mínimo</h1>
        <p>Utiliza un bucle para encontrar el número más grande y más pequeño de un array de enteros.</p>
        <hr>

        <?php
        // 1. Definir el array de números
        $numeros = [25, 14, 8, 72, 3, 51, 44];

        // 2. Inicializar las variables $maximo y $minimo
        // Asignamos el primer elemento del array a ambas para tener
        // un punto de partida real para la comparación.
        $maximo = $numeros[0];
        $minimo = $numeros[0];

        // 3. Recorrer el array con un bucle 'foreach'
        foreach ($numeros as $numero) {
            
            // Comprobamos si el número actual es MAYOR que el máximo guardado
            if ($numero > $maximo) {
                // Si lo es, actualizamos el máximo
                $maximo = $numero;
            }

            // Comprobamos si el número actual es MENOR que el mínimo guardado
            // (Usamos 'if' separado, no 'elseif', porque un número 
            // en un array de 1 solo elemento es a la vez max y min)
            if ($numero < $minimo) {
                // Si lo es, actualizamos el mínimo
                $minimo = $numero;
            }
        }

        // 4. Mostrar los resultados en HTML
        echo "<p>El array de números es: <code>[" . implode(", ", $numeros) . "]</code></p>";
        
        echo "<p class='resultado max'>El número MÁXIMO del array es: $maximo</p>";
        echo "<p class='resultado min'>El número MÍNIMO del array es: $minimo</p>";
        
        ?>

    </div>

</body>
</html>