<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6: Contar Elementos</title>
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
            color: #166534; /* Verde oscuro */
            background-color: #f0fdf4;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #bbf7d0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 6: Contar elementos mayores que un número</h1>
        <p>Dado un array de números, cuenta cuántos son mayores que 5.</p>
        <hr>

        <?php
        // 1. Definir el array de números y el número a comparar
        $numeros = [1, 8, 4, 10, 5, 20, 3];
        $numero_limite = 5;

        // 2. Inicializar un contador
        $contador = 0;

        // 3. Recorrer el array
        foreach ($numeros as $numero) {
            
            // 4. Comprobar la condición
            if ($numero > $numero_limite) {
                // 5. Si se cumple, incrementar el contador
                $contador++;
            }
        }
        
        // 6. Mostrar los resultados en HTML
        echo "<p>El array de números es: <code>[" . implode(", ", $numeros) . "]</code></p>";
        echo "<p>Número límite para la comparación: <code>$numero_limite</code></p>";
        
        echo "<p class'resultado'>Hay $contador números mayores que $numero_limite.</p>";
        ?>

    </div>

</body>
</html>