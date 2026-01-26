<?php
require_once 'modelo.php';

// 1. Conectar a BBDD
$conexion = conectar_db();

// 2. Recoger la acción de la URL (si no hay, por defecto es 'listar')
$accion = $_GET['accion'] ?? 'listar';

// 3. Enrutador (Switch/If)
if ($accion == 'nueva') {
    include 'vistas/formulario.php';
    
} elseif ($accion == 'guardar') {

    $titulo = $_POST['input_titulo'] ?? '';
    $descripcion = $_POST['input_descripcion'] ?? '';
    // TAREA: Recoger datos $_POST, validar que el título no esté vacío y llamar al modelo
    // Después, redirigir con header('Location: index.php');

    if ($titulo != null && $descripcion != null){
        insertar_tarea($conexion, $titulo, $descripcion);
        include 'vistas/lista.php';
    } else {
        echo "Algun dato es nulo";
        include 'vistas/lista.php';
    }

    


} elseif ($accion == 'borrar') {
    // TAREA: Recoger el id de $_GET y llamar al modelo
    // Redirigir

} elseif ($accion == 'completar') {
    // TAREA: Recoger el id de $_GET y llamar al modelo
    // Redirigir

} else {
    // CASO POR DEFECTO: LISTAR
    // TAREA: Pedir las tareas al modelo y cargar la vista de lista
    // $datos = obtener_tareas($conexion);
    include 'vistas/lista.php';
}
?>