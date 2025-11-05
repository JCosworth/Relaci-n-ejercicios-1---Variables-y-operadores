<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1: Suma de Array</title>
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
        <h1>Ejercicio 1: Suma de elementos de un array</h1>
        [cite_start]<p>Crea un array de números enteros y utiliza un bucle para sumar todos los elementos. [cite: 4]</p>
        <hr>

        <?php
        // 1. Definir el array de números
        $numeros = [10, 5, 8, 20, 3];

        // 2. Inicializar la variable 'acumuladora'
        $suma = 0;

        // 3. Recorrer el array con un bucle 'foreach'
        // 'foreach' es la forma más moderna y fácil de recorrer arrays en PHP.
        // Significa: "Por cada elemento en $numeros, pon el valor en $numero"
        foreach ($numeros as $numero) {
            // Suma el valor actual al total
            $suma += $numero;
        }

        // 4. Mostrar los resultados en HTML
        
        // implode() es una función útil que une los elementos de un array
        // con un string (en este caso, ", ")
        echo "<p>El array de números es: <code>[" . implode(", ", $numeros) . "]</code></p>";
        
        echo "<p class='resultado'>La suma total de los elementos es: $suma</p>";
        ?>

    </div>

</body>
</html>