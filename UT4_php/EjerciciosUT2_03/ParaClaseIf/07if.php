<?php
    include "cabecera.php";
    $nSecreto = rand(1, 100);
    $intento = rand(1, 100);
    echo "<p>Si intento es {$intento}</p>";
    if ($nSecreto === $intento){
        echo "<p>Felicidades el numero secreto y tu intento coinciden</p>";
    }
    else if ($nSecreto > $intento){
        echo "<p>El intento es mas bajo que el nº secreto</p>";
    } else {
         echo "<p>El intento es mas alto que el nº secreto</p>";
    }
    echo "<a href='07if.php'>Recargar</a>";

    include "pie.php";
?>
