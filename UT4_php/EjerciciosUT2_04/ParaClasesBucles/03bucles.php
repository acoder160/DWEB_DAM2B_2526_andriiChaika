<?php
    include "cabecera.php";
    echo "<h2>Tabla de una fila</h2>
    <table><tr>";
        
    for ($i=1; $i <= 10; $i++) { 
        echo "<td>${i}</td>";
    }
    echo "</tr></table>";


    echo "<h2>Tabla de una columna</h2>
    <table>";
    $i = 1;
    while ($i <= 10) { 
        echo "<tr><td>${i}</td></tr>";
        $i++;
    }
    echo "</table>";

    include "pie.php";
?>
