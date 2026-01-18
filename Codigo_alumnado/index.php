<?php
session_start(); 

// si no existe el array de deportistas
if (!isset($_SESSION['deportistas'])) {
    $_SESSION['deportistas'] = array();
}

// funcion para limpiar datos de entrada
function sanearDato($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

// funcion para validar si esta vacio o rango
function validarDato($dato, $tipo) {
    if ($tipo == 'texto') {
        return !empty($dato);
    }
    if ($tipo == 'edad') {
        return (is_numeric($dato) && $dato >= 4 && $dato <= 120);
    }
    if ($tipo == 'email') {
        return filter_var($dato, FILTER_VALIDATE_EMAIL);
    }
    return false;
}

// procesar el formulario si viene por post
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] == 'registrar') {
    
    // saneamos los datos
    $nombre = sanearDato($_POST['nombre']);
    $apellido = sanearDato($_POST['apellido']);
    $edad = sanearDato($_POST['edad']);
    $sexo = isset($_POST['sexo']) ? sanearDato($_POST['sexo']) : '';
    $deportes = isset($_POST['deportes']) ? $_POST['deportes'] : array(); // array de deportes
    $horario = isset($_POST['horario']) ? sanearDato($_POST['horario']) : '';
    $email = sanearDato($_POST['email']);

    $errores = array();

    // validacione
    if (!validarDato($nombre, 'texto')) $errores['nombre'] = "Este campo es obligatorio.";
    if (!validarDato($apellido, 'texto')) $errores['apellido'] = "Este campo es obligatorio.";
    if (!validarDato($edad, 'edad')) $errores['edad'] = "La edad debe estar entre 4 y 120 años.";
    if (empty($sexo)) $errores['sexo'] = "Debe seleccionar un sexo.";
    if (empty($deportes)) $errores['deportes'] = "Debe seleccionar al menos un deporte.";
    if (empty($horario)) $errores['horario'] = "Debe seleccionar un horario.";
    if (!validarDato($email, 'email')) $errores['email'] = "El email no es valido.";

    // guardamos los datos enviados por si hay error 
    $_SESSION['formData'] = $_POST;

    if (count($errores) > 0) {
        $_SESSION['errores'] = $errores;
        header("Location: index.php?page=registro"); // recargamos con errores
    } else {
        // si todo ok, guardamos en la sesion de deportistas
        $nuevo_deportista = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'edad' => $edad,
            'sexo' => $sexo,
            'deportes' => $deportes,
            'horario' => $horario,
            'email' => $email
        );
        $_SESSION['deportistas'][] = $nuevo_deportista;
        
        // limpiamos errores y form data
        unset($_SESSION['errores']);
        unset($_SESSION['formData']);
        
        header("Location: index.php?page=deportistas"); 
    }
    exit();
}

// cerrar sesion
if (isset($_GET['page']) && $_GET['page'] == 'logout') {
    session_destroy();
    header("Location: index.php");
    exit();
}

// control de vistas
$pagina = isset($_GET['page']) ? $_GET['page'] : 'principal';

include 'cabecera.php';

// cargamos la vista correspondiente
switch ($pagina) {
    case 'principal':
        include 'principal.php';
        break;
    case 'registro':
        include 'registro.php';
        break;
    case 'deportistas':
        include 'deportistas.php';
        break;
    default:
        include 'pagina404.php'; // error 404
        break;
}

// pie comun
include 'pie.php';
?>