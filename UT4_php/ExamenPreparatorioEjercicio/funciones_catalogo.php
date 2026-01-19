<?php
function agregarProducto($catalogo, $nuevoProducto){
    foreach($nuevoProducto as $clave => $valor){
        $catalogo[$clave] = $valor;
    }
    return $catalogo; // se devuelva Porque se crea una copia temporal con lo cual hay que actualizar la original
}

function eliminarProducto($catalogo, $id){
    foreach($catalogo as $clave => $valor){
        if ($valor['id'] == $id){
            unset($catalogo[$clave]);
        }
    }
    return $catalogo; // se devuelva Porque se crea una copia temporal con lo cual hay que actualizar la original
}

function filtrarPorCategoria($catalogo, $categoria) {

    return array_filter($catalogo, function($valor) use ($categoria){
        return $valor['categoria'] === $categoria;
    });
}

function calcularPrecioMedio($catalogo){
    $suma = 0.00;
    foreach($catalogo as $clave => $valor){
       $suma += $valor['precio'];
    }
    $medio = $suma / count($catalogo); // se devuelva Porque se crea una copia temporal con lo cual hay que actualizar la original
    return number_format($medio, 2);


    // count(array) = .length()
    //number_format(numero, decimals) => formatear un nuemro a solo dos decimales.

}


function incrementarPrecios($catalogo, $porcentaje){
    foreach($catalogo as $clave => $valor){
        $nuevoPrecio = $valor['precio'] + ($valor['precio'] * $porcentaje / 100);
        $catalogo[$clave]['precio'] = $nuevoPrecio; //es importante acceder al valor desde $catalogo para que se actualize en el array original
    }
    return $catalogo;
}

function productosBajoStock($catalogo, $umbral){
    return array_filter($catalogo, function($valor) use ($umbral){
        return $valor['stock'] > $umbral;
    });
}

function generarResumen($catalogo){
    $totalProductos = count($catalogo);
    $categoriasDiferentes = 0;
    $valorStock = 0;
     foreach($catalogo as $clave => $valor){
     $valorStock += $valor['precio'] * $valor['stock'];
    }
    $categorias = array_column($catalogo, 'categoria');
    $categoriasUnicas = array_unique($categorias);
    $numCategorias = count($categoriasUnicas);
    
    $arrayResumen = ["TotalCantidad" => $totalProductos,
                    "Categorias" => $numCategorias,
                    "ValorTotal" => $valorStock];
    return $arrayResumen;
}

function filtrarOfertasFlash($catalogo){
    return array_filter($catalogo, function($valor){
        return $valor['precio'] > 400 && $valor['stock'] < 10;
    });
}


?>