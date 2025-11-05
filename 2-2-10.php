<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10: Frecuencia de Palabras</title>
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
        /* Estilo para la tabla de resultados */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px 14px;
            text-align: left;
        }
        th {
            background-color: #f9fafb; /* Fondo gris claro */
            color: #374151; /* Texto gris oscuro */
        }
        td code {
            font-size: 1em; /* Ajustar el 'code' dentro de la tabla */
            background-color: #fef2f2;
            color: #b91c1c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 10: Array asociativo de frecuencia</h1>
        [cite_start]<p>Dado un array de palabras, crea un array asociativo que cuente cuántas veces aparece cada palabra.</p> [cite: 13]
        <hr>

        <?php
        
        // 1. Array de palabras original (con duplicados)
        $palabras = ["manzana", "pera", "manzana", "naranja", "pera", "manzana", "uva", "pera"];

        // 2. Array asociativo vacío para almacenar las frecuencias
        $frecuencias = [];

        // 3. Bucle para contar
        foreach ($palabras as $palabra) {
            
            // 4. Comprobar si la palabra ya es una 'clave' en $frecuencias
            if (array_key_exists($palabra, $frecuencias)) {
                // Si existe, incrementa su contador
                $frecuencias[$palabra]++;
            } else {
                // Si no existe, la añade como clave nueva con valor 1
                $frecuencias[$palabra] = 1;
            }
        }

        // 5. Mostrar los resultados en HTML
        echo "<p>Array Original: <code>[" . implode(", ", $palabras) . "]</code></p>";
        
        echo "<h2>Tabla de Frecuencias (Array Asociativo)</h2>";

        // 6. Imprimir el array asociativo como una tabla
        echo "<table>";
        echo "<tr><th>Palabra (Clave)</th><th>Veces (Valor)</th></tr>";
        
        // Bucle especial para arrays asociativos:
        // $palabra será la 'clave' y $conteo será el 'valor'
        foreach ($frecuencias as $palabra => $conteo) {
            echo "<tr>";
            echo "<td><code>\"$palabra\"</code></td>";
            echo "<td>$conteo</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        ?>

    </div>

</body>
</html>