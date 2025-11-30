<?php
    include "cabecera.php";
    $puntos = 300;
    $bonificacion = true;

    echo "<p>Puntos iniciales: {$puntos}</p>
        <p>Con bonificacion de " . ($bonificacion? 100 : 0) . " puntos </p>
        <p>Puntos totales " . $puntos + ($bonificacion? 100 : 0) . "</p>";


    include "pie.php";
?>
