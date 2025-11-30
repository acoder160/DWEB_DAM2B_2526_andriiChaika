<?php

include "includes/cabecera.php";

function calcularPrecioFinal($precio, $descuento) {
    $rebaja = ($precio * $descuento) / 100;
    return $precio - $rebaja;
}

function diaSemana($num) {
    if ($num == 1) return "Lunes";
    if ($num == 2) return "Martes";
    if ($num == 3) return "Miércoles";
    if ($num == 4) return "Jueves";
    if ($num == 5) return "Viernes";
    if ($num == 6) return "Sábado";
    if ($num == 7) return "Domingo";

    return "Incorrecto";
}

function totalSegundos($horas, $minutos) {
    return ($horas * 3600) + ($minutos * 60);
}

function nombreGenero($abre) {
    if ($abre == "TER") return "TERROR";
    if ($abre == "COM") return "COMEDIA";
    if ($abre == "DRA") return "DRAMA";
    if ($abre == "FIC") return "CIENCIA FICCIÓN";
    if ($abre == "ROM") return "ROMÁNTICA";

    return "Incorrecto";
}


$precio = 456;
$descuento = 6;
$precioFinal = calcularPrecioFinal($precio, $descuento);

echo "<p>Precio: {$precio}€</p>";
echo "<p>Descuento: {$descuento}%</p>";
echo "<p>Precio final con descuento: " . number_format($precioFinal, 2) . "€</p>";
echo "<hr>";


$diaNum = 6;
echo "<p>El día correspondiente al n° {$diaNum} es " . diaSemana($diaNum) . "</p>";
echo "<hr>";


$h = 3;
$m = 36;
echo "<p>{$h} hora y {$m} minutos son " . totalSegundos($h, $m) . " segundos</p>";
echo "<hr>";


$gen = "FIC";
echo "<p>El género correspondiente a '{$gen}' es " . nombreGenero($gen) . "</p>";
echo "<hr>";


 include "includes/pie.php";
?>
