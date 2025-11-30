<?php
    include "cabecera.php";
    
    $presupuesto = 250;
    $precio = 16;
    $acum = 0;


    for ($i=1; $acum <= $presupuesto; $i++) { 
        $acum += $precio;
        echo "<p>{$i} : {$acum}</p>";
    }
    echo "<p>Por 250€, se pueden comprar " . $i - 2 . " libros</p>";
    include "pie.php";
?>
