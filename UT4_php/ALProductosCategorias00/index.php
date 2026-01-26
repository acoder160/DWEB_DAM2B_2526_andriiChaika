<?php
    require_once 'utils.php';
    require_once "conexión.php";
// 2. Definir la acción por defecto
$accion = 'inicio'; 


if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
}

// 3. Lógica del "Director de Tráfico" (Switch)
switch ($accion) {
    
    case 'categorias':
        // A) Consulta para obtener categorías ordenadas alfabéticamente
        $sql = "SELECT nombre FROM categorias ORDER BY nombre ASC";
        $resultado = $conn->query($sql);
        
        $datos = array(); // Usamos un nombre genérico '$datos' para reutilizar
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        
        // B) Cargamos la vista de categorías
        $vista = 'vista_categorias.php';
        break;

    case 'ordenar':
        // A) Consulta para productos ordenados por precio descendente
        $sql = "SELECT nombre, precio FROM productos ORDER BY precio DESC";
        $resultado = $conn->query($sql);
        
        $datos = array();
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        
        // B) Cargamos la vista de productos ordenados
        $vista = 'vista_productos_precio.php';
        break;

    case 'inicio':
    default:
        // A) Consulta por defecto
        $sql = "SELECT idProducto, nombre, precio FROM productos";
        $resultado = $conn->query($sql);
        
        $productos = array(); 
        
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }
        
        // B) Cargamos la vista de inicio
        $vista = 'vista_inicio.php';
        break;
}
   
    if (isset($vista)) {
        
        include $vista;
    }
   
     
     
?>
