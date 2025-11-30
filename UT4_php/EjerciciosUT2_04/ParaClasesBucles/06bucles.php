<?php
    include "cabecera.php";
    
    echo "<h2>Generando casillas de verificación</h2>";
    echo "<form action='#' method='get' >";
    echo "<div>";
    for ($i=1; $i <= 10; $i++) { 
        echo "<input type='checkbox' value='{$i}'>
        <label>Casilla {$i}</label><br>";
    }
    echo "</div></form>"; 

    include "pie.php";
?>
