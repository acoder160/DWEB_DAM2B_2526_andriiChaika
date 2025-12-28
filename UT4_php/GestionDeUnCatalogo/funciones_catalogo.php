<?php
// Solo devolver valores y no mostrar nada
function agregarProducto($catalogo, $nuevoProducto){
    foreach ($nuevoProducto as $key => $value) {
        $catalogo[$key] = $value;
    }
    return $catalogo; //se crea una copia tempòral de array asi que hay que devolverlo
}

function eliminarProducto($catalogo, $id){
    foreach ($catalogo as $key => $value) {
        if ($value["id"] === $id){
            unset($catalogo[$key]);
        }
    }
    return $catalogo; //se crea una copia tempòral de array asi que hay que devolverlo
}

function filtrarPorCategoria($catalogo, $categoria) {
    // Usamos array_filter con una función anónima (closure)
    return array_filter($catalogo, function($producto) use ($categoria) {
        // Retornamos true si la categoría coincide, false si no.
        return $producto['categoria'] === $categoria;
    });
}


function calcularPrecioMedio($catalogo){
    $suma = 0;
    foreach ($catalogo as $key => $value) {
         $suma += $value["precio"];
    }
    return $suma / count($catalogo);
}

function productosBajoStock($catalogo, $umbral){
    $productos = [];
    foreach ($catalogo as $key => $value) {
         if ($value["stock"] <= $umbral){
            $productos[$key] = $value;
         }
    }
    return $productos ;
}

function generarResumen($catalogo) {
    
    $valorTotalStock = 0;
    foreach ($catalogo as $producto) {
        // (Precio por cantidad de stock) y se acumula
        $valorTotalStock += ($producto['precio'] * $producto['stock']);
    }

    // 2. Obtener las categorías y contar las únicas
    // array_column: extrae todos los valores de la columna 'categoria'
    $categorias = array_column($catalogo, 'categoria');
    
    // array_unique: elimina duplicados
    $categoriasUnicas = array_unique($categorias);

    return [
        // a) Número total de productos
        "total_productos" => count($catalogo),
        
        // b) Número de categorías diferentes
        "total_categorias_diferentes" => count($categoriasUnicas), 
        
        // c) Valor total del stock (suma de precio * stock)
        "valor_total_stock" => $valorTotalStock
    ];
}

?>