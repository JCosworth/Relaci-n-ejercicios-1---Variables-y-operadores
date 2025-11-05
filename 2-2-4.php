<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: Array Consecutivo</title>
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
        <h1>Ejercicio 4: Array de números consecutivos</h1>
        <p>Genera un array de 10 números consecutivos a partir de un número dado.</p>
        <hr>

        <?php
        // 1. Definir el número inicial
        $numero_inicial = 25;
        
        // 2. Definir cuántos números queremos
        $cantidad = 10;

        // 3. Crear un array vacío para guardar los resultados
        $numeros_consecutivos = [];

        // 4. Bucle 'for' que se ejecuta 'cantidad' de veces
        // Empezamos $i en 0 y terminamos en 9 (10 vueltas)
        for ($i = 0; $i < $cantidad; $i++) {
            
            // 5. Añadir el número consecutivo al array
            // $numero_inicial + $i -> (25+0), (25+1), (25+2), ...
            $numeros_consecutivos[] = $numero_inicial + $i;
            
            // La línea anterior es lo mismo que:
            // array_push($numeros_consecutivos, $numero_inicial + $i);
        }

        // 6. Mostrar los resultados en HTML
        echo "<p>Número inicial: <code>$numero_inicial</code></p>";
        echo "<p>Cantidad de números a generar: <code>$cantidad</code></p>";
        
        echo "<p class='resultado'>Array generado: [" . implode(", ", $numeros_consecutivos) . "]</p>";
        ?>

    </div>

</body>
</html>