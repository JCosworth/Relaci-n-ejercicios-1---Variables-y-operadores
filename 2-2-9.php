<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9: Eliminar Duplicados</title>
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
        <h1>Ejercicio 9: Eliminar duplicados en un array</h1>
        <p>Dado un array, utiliza un bucle para eliminar los valores duplicados.</p>
        <hr>

        <?php
        
        // --- 1. REUTILIZAMOS LA FUNCIÓN DEL EJERCICIO 8 ---
        
        /**
         * Busca un valor dentro de un array.
         * @param array $array El array donde buscar.
         * @param mixed $valor_buscado El valor a encontrar.
         * @return bool True si se encuentra, False si no.
         */
        function buscarValorEnArray($array, $valor_buscado) {
            foreach ($array as $elemento) {
                if ($elemento === $valor_buscado) {
                    return true;
                }
            }
            return false;
        }

        // --- 2. LÓGICA DEL EJERCICIO 9 ---
        
        // Datos de prueba con duplicados
        $array_original = [1, 5, 2, 5, 8, 1, 10, 2, 5, 10];
        
        // Array vacío donde guardaremos los valores únicos
        $array_sin_duplicados = [];

        // 3. Bucle para "filtrar"
        foreach ($array_original as $valor) {
            
            // 4. Usamos la función de búsqueda:
            // ¿El valor actual NO ESTÁ (false) en el array de únicos?
            if (buscarValorEnArray($array_sin_duplicados, $valor) == false) {
                
                // Si no está, lo añadimos
                $array_sin_duplicados[] = $valor;
            }
            // Si ya está (la función devuelve true), no hacemos nada
        }

        // 5. Mostrar los resultados en HTML
        echo "<p>Array Original: <code>[" . implode(", ", $array_original) . "]</code></p>";
        echo "<p class='resultado'>Array sin duplicados: [" . implode(", ", $array_sin_duplicados) . "]</p>";

        
        // --- 3. MÉTODO ALTERNATIVO (EL MÁS FÁCIL DE PHP) ---
        echo "<h2>Solución Alternativa (Método simple de PHP)</h2>";
        echo "<p>PHP tiene una función nativa, <code>array_unique()</code>, que hace esto automáticamente:</p>";
        
        // La función 'array_unique' hace todo el trabajo
        $resultado_nativo = array_unique($array_original);
        
        echo "<p class='resultado'>Resultado con array_unique(): [" . implode(", ", $resultado_nativo) . "]</p>";
        
        ?>

    </div>

</body>
</html>