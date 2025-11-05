<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5: Concatenar Array</title>
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
            /* No usamos 'bold' para que la frase se lea naturalmente */
            color: #1f2937; /* Gris oscuro */
            background-color: #f3f4f6;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            line-height: 1.7;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 5: Concatenar valores de un array</h1>
        [cite_start]<p>Dado un array de strings, utiliza un bucle para concatenar todos los valores en una sola variable de tipo cadena de texto. [cite: 8]</p>
        <hr>

        <?php
        // 1. Definir el array de strings
        $palabras = ["Hola", "a", "todos", "los", "estudiantes", "de", "PHP"];

        // 2. Inicializar la variable 'acumuladora' como un string vacío
        $frase_completa = "";

        // 3. Recorrer el array con un bucle 'foreach'
        foreach ($palabras as $palabra) {
            
            // 4. Concatena la palabra actual a la frase
            //    También añadimos un espacio " " para que no queden pegadas.
            $frase_completa .= $palabra . " ";
            
            // La línea anterior es lo mismo que:
            // $frase_completa = $frase_completa . $palabra . " ";
        }
        
        // 5. Opcional: Quita el último espacio sobrante al final
        $frase_completa = trim($frase_completa);

        // 6. Mostrar los resultados en HTML
        echo "<p>El array de palabras es: <code>[\"" . implode('", "', $palabras) . "\"]</code></p>";
        
        echo "<p class='resultado'>La frase concatenada es: <br><strong>$frase_completa</strong></p>";
        ?>

    </div>

</body>
</html>