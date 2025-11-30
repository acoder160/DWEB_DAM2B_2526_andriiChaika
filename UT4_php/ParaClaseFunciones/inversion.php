<?php

const INTERES = 0.05; 

function calcularCantidad($inicial, $anios) {
    return $inicial * pow((1 + INTERES), $anios);
}

$cantidadInicial = 1500;
$anios = 6;
$interesMostrar = INTERES * 100; 

$nuevaCantidad = calcularCantidad($cantidadInicial, $anios);
?>