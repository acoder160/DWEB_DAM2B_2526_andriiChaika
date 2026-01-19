<?php
function formatearNombre($nombre){
    $nombrLimpio = mb_strtoupper(trim($nombre));
    return $nombrLimpio;
}
function calcularDescuento($precio, $porcentaje){
    return ($precio -= ($precio * $porcentaje / 100));
}
function obtenerMensajeStock($cantidad){
    if ($cantidad <= 0){
        return '<span style="color: red">Agotado</span>';
    } elseif ($cantidad < 5){
        return '<span style="color: orange">¡Últimas unidades!</span>';
    } else {
        return '<span style="color: green">Disponible</span>';
    }
}

?>