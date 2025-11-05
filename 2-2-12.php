<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12: Arrays Anidados</title>
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
        td:first-child { /* Clave externa */
            font-family: "Courier New", Courier, monospace;
            background-color: #eef2ff;
            color: #4338ca;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 12: Acceder a un array asociativo anidado</h1>
        <p>Dado un array asociativo que contiene información sobre varias personas, accede al nombre y la edad de cada persona.</p>
        <hr>

        <?php
        
        // 1. Array asociativo anidado (dado por el ejercicio)
        // (Nota: Corregí la sintaxis del PDF que parecía estar incompleta)
        $personas = [
            "persona1" => ["nombre" => "Juan", "edad" => 25],
            "persona2" => ["nombre" => "Ana", "edad" => 30],
            "persona3" => ["nombre" => "Carlos", "edad" => 42]
        ]; [cite_start]// [cite: 22-26] (Añadí persona3 y corregí la sintaxis)

        
        echo "<h2>Tabla de Personas</h2>";
        
        echo "<table>";
        echo "<tr><th>Clave Externa</th><th>Nombre</th><th>Edad</th></tr>";
        
        // 2. Bucle foreach para el array EXTERIOR
        // $clave será "persona1", "persona2", ...
        // $datos_persona será el array INTERIOR (ej. ["nombre" => "Juan", "edad" => 25])
        foreach ($personas as $clave => $datos_persona) {
            
            // 3. Accedemos a los valores del array INTERIOR
            $nombre = $datos_persona['nombre'];
            $edad = $datos_persona['edad'];
            
            echo "<tr>";
            echo "<td><code>\"$clave\"</code></td>";
            echo "<td>$nombre</td>";
            echo "<td>$edad años</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        ?>

    </div>

</body>
</html>