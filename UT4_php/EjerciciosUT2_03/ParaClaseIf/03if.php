<?php
    include "cabecera.php";
    $ida = rand(1,7);
    
    switch ($ida){
        case 1:
            echo "<p>Día Laborable</p>";
            break;
        case 2:
            echo "<p>Día Laborable</p>";
            break;
        case 3:
            echo "<p>Día Laborable</p>";
            break;
        case 4:
            echo "<p>Día Laborable</p>";
            break;
        case 5:
            echo "<p>Día Laborable</p>";
            break;
        case 6:
            echo "<p>Día no laborable</p>";
            break;
        case 7:
            echo "<p>Día no laborable</p>";
            break;

    }

    include "pie.php";
?>
