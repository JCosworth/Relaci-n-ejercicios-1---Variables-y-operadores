<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11: Array Asociativo</title>
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
        td:first-child { /* Estilo para la primera celda (producto) */
            font-weight: 500;
            color: #374151;
        }
        td:last-child { /* Estilo para la última celda (precio) */
            font-family: "Courier New", Courier, monospace;
            font-weight: bold;
            color: #166534; /* Verde */
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ejercicio 11: Imprimir los valores de un array asociativo</h1>
        [cite_start]<p>Dado un array asociativo de productos y precios, imprime todos los productos y sus respectivos precios. [cite: 15]</p>
        <hr>

        <?php
        
        // 1. Array asociativo de productos (dado por el ejercicio)
        $productos = [
            "Camiseta" => 20,
            "Pantalón" => 35,
            "Zapatos" => 50,
            "Gorra" => 15
        ]; [cite_start]// [cite: 16-20] (He añadido 'Gorra' para más ejemplos)

        
        echo "<h2>Tabla de Productos y Precios</h2>";

        // 2. Imprimir el array asociativo como una tabla
        echo "<table>";
        echo "<tr><th>Producto (Clave)</th><th>Precio (Valor)</th></tr>";
        
        // 3. Bucle foreach para 'clave' => 'valor'
        // $producto recibirá la clave ("Camiseta", "Pantalón", ...)
        // $precio recibirá el valor (20, 35, ...)
        foreach ($productos as $producto => $precio) {
            echo "<tr>";
            echo "<td>$producto</td>";
            echo "<td>$precio €</td>"; // Añadimos el símbolo de €
            echo "</tr>";
        }
        
        echo "</table>";
        
        ?>

    </div>

</body>
</html>