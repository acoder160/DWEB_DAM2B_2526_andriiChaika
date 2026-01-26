<?php
// TAREA 1: Configura la conexión aquí
function conectar_db() {
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "todo_list";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}

return  $conn;
}




// TAREA 2: Realiza el SELECT de todas las tareas
function obtener_tareas($conexion) {
    $sql = "SELECT * FROM tasks ORDER BY created_at DESC"; //DESC porque los ultimos aparecen primeros
    $resultado = $conexion->query($sql);

    $datos = array(); // Usamos un nombre genérico '$datos' para reutilizar

    if ($resultado) {
        // 3. Usamos mysqli_fetch_assoc
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $datos[] = $fila;
        }
    }

    return $datos;
}

// TAREA 3: Realiza el INSERT de una tarea nueva
// OJO: Recuerda proteger los datos con mysqli_real_escape_string (sois ASIR, la seguridad importa)
function insertar_tarea($conexion, $titulo, $descripcion) {
    $tituloSeguro = mysqli_real_escape_string($conexion, $titulo);
    $descripcionSegura = mysqli_real_escape_string($conexion, $descripcion);

    $sql = "INSERT INTO tasks (title, description)
    VALUES ('$tituloSeguro', '$descripcionSegura')";

    if (mysqli_query($conexion, $sql)) {
    echo "¡Guardado correctamente!";
    } else {
    echo "Error: " . mysqli_error($conexion);
    }

}

// TAREA 4: Realiza el DELETE de una tarea por ID
function eliminar_tarea($conexion, $id) {
    $idSeguro = mysqli_real_escape_string($conexion, $id);
    $sql = "DELETE FROM todo_list WHERE id = $idSeguro";

    if (mysqli_query($conexion, $sql)) {
        // Verificamos si realmente se borro alguna fila
        if (mysqli_affected_rows($conexion) > 0) {
            echo "La tarea con el id " . $idSeguro . " ha sido eliminada.";
        } else {
            echo "No existía ninguna tarea con el id " . $idSeguro;
        }
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}

// TAREA 5: Realiza el UPDATE para marcar completada
function marcar_completada($conexion, $id) {
    $idSeguro = mysqli_real_escape_string($conexion, $id);

    $sql = "UPDATE todo_list SET completed = 1 WHERE id = $idSeguro";

     if (mysqli_query($conexion, $sql)) {
        // Verificamos si realmente se borro alguna fila
        if (mysqli_affected_rows($conexion) > 0) {
            echo "La tarea con el id " . $idSeguro . " ha sido marcada como completada.";
        } else {
            echo "No existía ninguna tarea con el id " . $idSeguro;
        }
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>