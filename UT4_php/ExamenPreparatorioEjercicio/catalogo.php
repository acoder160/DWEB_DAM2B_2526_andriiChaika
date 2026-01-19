<?php
include 'funciones_catalogo.php';
$productos = [
    "portatiles" => [
        "id" => 1,
        "nombre" => "Lenovo",
        "precio" => 699.99,
        "categoria" => "Portatiles",
        "stock" => 12
    ],
    "smartphones" => [
        "id" => 2,
        "nombre" => "iPhone 15",
        "precio" => 950.00,
        "categoria" => "Moviles",
        "stock" => 2
    ],
    "tablets" => [
        "id" => 3,
        "nombre" => "Samsung Galaxy Tab S9",
        "precio" => 499.50,
        "categoria" => "Moviles",
        "stock" => 8
    ],
    "monitores" => [
        "id" => 4,
        "nombre" => "Monitor LG UltraGear 27''",
        "precio" => 220.00,
        "categoria" => "Accesorios",
        "stock" => 5
    ],
    "audio" => [
        "id" => 5,
        "nombre" => "Sony WH-1000XM5",
        "precio" => 349.99,
        "categoria" => "Accesorios",
        "stock" => 15
    ]
];


echo"<h2>Catalogo inicial</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($productos as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";

// añado un nuevo producto
$nuevoProducto = ["flipFones" => [
    "id" => 6,
    "nombre" => "Z fold 7",
    "precio" => 2199.99,
    "categoria" => "Moviles",
    "stock" => 25
]];

$productos = agregarProducto($productos, $nuevoProducto);

echo"<h2>Catalogo tras añadir un nuevo producto</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($productos as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";


// elimino el producto con id 4
$productos = eliminarProducto($productos, 4);

echo"<h2>Catalogo tras eliminar producto con id 4</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($productos as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";



//Categoria == MOVILES

$proudctoFiltrado = filtrarPorCategoria($productos, 'Moviles');

echo"<h2>Catalogo de solo proudctos de la categoria Moviles</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($proudctoFiltrado as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";


echo"<h2>Precio medio es: " . calcularPrecioMedio($productos) . "€</h2>";

//Incrementar precuis

$productos = incrementarPrecios($productos, 10);

echo"<h2>Incrementando precios a un 10%</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($productos as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";

//productos con stock mayor de 5
$umbral = 5;
$productosBajoStock = productosBajoStock($productos, $umbral);


echo"<h2>productos con stock mayor de 5</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($productosBajoStock as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";

$resumen = generarResumen($productos);

echo"<h2>Resumen</h2><table border='1'><tr>
<th>Total de productos: </th>
<th>Categorias diferentes</th>
<th>Valor total</th>
</tr>";
    echo"<tr>
    <td>" . $resumen['TotalCantidad'] . "</td>
    <td>" . $resumen['Categorias'] . "</td>
    <td>" . $resumen['ValorTotal'] . "</td>
    </tr>";
echo "</table>";


// ofertas flash
$flash = filtrarOfertasFlash($productos);

echo"<h2>Productos que cumplen condiciones de la oferta flash</h2><table border='1'><tr>
<th>id</th>
<th>nombre</th>
<th>precio (€)</th>
<th>categoria</th>
<th>stock</th>
</tr>";
foreach($flash as $clave => $valor){
    echo"<tr>
    <td>" . $valor['id'] . "</td>
    <td>" . $valor['nombre'] . "</td>
    <td>" . $valor['precio'] . "</td>
    <td>" . $valor['categoria'] . "</td>
    <td>" . $valor['stock'] . "</td>
    </tr>";
}
echo "</table>";


?>