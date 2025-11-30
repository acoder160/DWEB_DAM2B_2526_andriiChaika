<?php
    include "cabecera.php";
    
    echo "<h2>Generando botones</h2>";
    echo "<form action='#' method='get' >";
    echo "<div>";
    for ($i=1; $i <= 10; $i++) { 
        echo "<label>Botón {$i}</label>
        <input type='submit' name='editar{$i}' value ='Editar' />
        <input type='submit' name='borrar{$i}' value ='Borrar' />
        <br>
        ";
    }
    echo "</div></form>"; 

    include "pie.php";
?>
