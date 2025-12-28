<?php
include 'includes/cabecera.php';
include 'funciones_catalogo.php';
$catalogo = [
    "producto1" => ["id" => 1, "nombre" => "Teclado mecánico", "categoria" => "Pereféricos", "precio" => 59.99, "stock" => 12],
    "producto2" => ["id" => 2, "nombre" => "Raton inalambrico", "categoria" => "Pereféricos", "precio" => 24.50, "stock" => 8],
    "producto3" => ["id" => 3, "nombre" => "Monitor 24 pulgadas", "categoria" => "Pantallas", "precio" => 129.99, "stock" => 4],
    "producto4" => ["id" => 4, "nombre" => "Disco SSD 1TB", "categoria" => "Almacenamiento", "precio" => 79.99, "stock" => 6],
    "producto5" => ["id" => 5, "nombre" => "Memoria RAM 2*16 GDDR5", "categoria" => "Memoria", "precio" => 729.99, "stock" => 15]  
];

function mostrarLista($array){
    echo "<table>";
    echo "<tr>"; 
    echo "<td>ID</td>"; 
    echo "<td>Nombre</td>";
    echo "<td>Categoría</td>";
    echo "<td>Precio (€)</td>";
    echo "<td>Stock</td>";
    echo "</tr>";

    foreach ($array as $claveProducto => $datos) {
        echo "<tr>";
      
        echo "<td>" . $datos['id'] . "</td>";
        echo "<td>" . $datos['nombre'] . "</td>";
        echo "<td>" . $datos['categoria'] . "</td>";
        echo "<td>" . $datos['precio'] . "</td>";
        echo "<td>" . $datos['stock'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";
}

echo "<h2>Catalogo Inicial</h2>";
mostrarLista($catalogo);

// Nuevo producto
$producto = ["producto6" => ["id" => count($catalogo) +1, "nombre" => "RTX 5080", "categoria" => "Tarjetas Graficas", "precio" => 849.99, "stock" => 9]];
$catalogo = agregarProducto($catalogo, $producto);

echo "<h2>Tras añadir nuevo producto</h2>";
mostrarLista($catalogo);


$catalogo = eliminarProducto($catalogo, 2);
echo "<h2>Tras eliminar el producto con ID 2</h2>";
mostrarLista($catalogo);

echo "<p>El precio medio de todos los productos es de" . calcularPrecioMedio($catalogo) . "</p>";

echo "<h2>Productos que tienen stock bajo 5</h2>";

mostrarLista(productosBajoStock($catalogo, 5));

$resumen = generarResumen($catalogo);

echo "<h2>Resumen del Catálogo</h2>";
echo "<pre>";
print_r($resumen);
echo "</pre>";


include 'includes/pie.php';
?>