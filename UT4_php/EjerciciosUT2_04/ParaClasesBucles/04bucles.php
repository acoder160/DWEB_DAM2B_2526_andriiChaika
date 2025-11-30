<?php
    include "cabecera.php";
    echo "<h2>Generando enlaces</h2>";
    for ($i=1; $i <= 10; $i++) { 
        echo "<a href='#'>Enlace {$i}</a><br>";
    }

    include "pie.php";
?>
