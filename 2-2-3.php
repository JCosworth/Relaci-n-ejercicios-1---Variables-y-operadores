<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3: Números Pares</title>
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
        h2 {
            color: #444;
            margin-top: 20px;
            border-top: 1px solid #eee;
            padding-top: 20px;
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
        .resultado span {
            display: inline-block;
            background-color: #f0fdf4; /* Fondo verde claro */
            color: #15803d; /* Texto verde oscuro */
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #bbf7d0;
            font-weight: bold;
            font-size: 1.1em;
            margin: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 3: Imprimir elementos pares</h1>
        <p>Dado un array de números, imprime solo los números pares.</p>
        <hr>

        <?php
        // 1. Definir el array de números
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

        // 2. Mostrar el array original
        echo "<p>El array de números es: <code>[" . implode(", ", $numeros) . "]</code></p>";
        
        echo "<h2>Resultados: Números pares encontrados</h2>";
        echo "<div class'resultado'>";

        // 3. Recorrer el array
        foreach ($numeros as $numero) {
            
            // 4. Comprobar si es par
            // ($numero % 2 == 0) -> ¿El resto de dividir por 2 es 0?
            if ($numero % 2 == 0) {
                // 5. Si es par, imprimirlo
                echo "<span>$numero</span>";
            }
        }
        
        echo "</div>";
        ?>

    </div>

</body>
</html>