<?php
    include "cabecera.php";
    $nombre = "Pedro";
    $hora = date("H");

    if ($hora < 14 && $hora > 6){
        echo "<p>Buenas dias {$nombre}</p>";
    } elseif ($hora > 14 && $hora < 21){
        echo "<p>Buenas tardes {$nombre}</p>";
    } else {
        echo "<p>Buenas novches {$nombre}</p>";
    }

    include "pie.php";
?>
