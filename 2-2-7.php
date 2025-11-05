<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7: Promedio de Valores</title>
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
        .calculo {
            font-family: "Courier New", Courier, monospace;
            background-color: #f9fafb;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 7: Promedio de valores</h1>
        <p>Calcula el promedio de los valores de un array.</p>
        <hr>

        <?php
        // 1. Definir el array de números
        $numeros = [10, 5, 8, 20, 7];

        // 2. Inicializar la suma
        $suma = 0;

        // 3. Sumar todos los elementos (como en el Ejercicio 1)
        foreach ($numeros as $numero) {
            $suma += $numero;
        }
        
        // 4. Contar cuántos elementos hay en el array
        // La función count() de PHP hace esto automáticamente
        $cantidad = count($numeros);
        
        // 5. Calcular el promedio
        // ¡Importante! Comprobar que la cantidad no sea 0 para evitar un error
        $promedio = 0;
        if ($cantidad > 0) {
            $promedio = $suma / $cantidad;
        }

        // 6. Mostrar los resultados en HTML
        echo "<p>El array de números es: <code>[" . implode(", ", $numeros) . "]</code></p>";
        
        echo "<h3>Cálculo:</h3>";
        echo "<p class='calculo'>";
        echo "Suma total: $suma<br>";
        echo "Cantidad de elementos: $cantidad<br>";
        echo "Operación: $suma / $cantidad = $promedio";
        echo "</p>";
        
        echo "<p class'resultado'>El promedio de los valores es: $promedio</p>";
        ?>

    </div>

</body>
</html>