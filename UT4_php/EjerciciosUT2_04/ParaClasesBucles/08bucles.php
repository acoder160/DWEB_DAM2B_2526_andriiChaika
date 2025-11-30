<?php
    include "cabecera.php";

    $multiplicador = 4; // se puede modificar para ver tabla con otro numero
    
    echo "<h2>Generando tabla de multiplicar de un nº</h2>
    <table><th>Tabla de multiplicar del {$multiplicador}</th>";
        
    for ($i=1; $i <= 10; $i++) { 

        echo "<tr><td>{$multiplicador} * {$i}</td><td>" . $multiplicador * $i . "</td></tr>";
    }
    echo "</table>";

    include "pie.php";
?>
