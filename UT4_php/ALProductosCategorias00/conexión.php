<?php
$servidor = "localhost";
$usuario = "root";
$password = "root";
$base_datos = "bdproductos";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Fallo la conexión: " . $conn->connect_error);
}

// echo "¡Conexión establecida!";
?>