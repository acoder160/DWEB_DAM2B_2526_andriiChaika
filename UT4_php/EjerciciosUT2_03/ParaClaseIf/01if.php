<?php
    include "cabecera.php";

    $nota = rand(1, 10);
    // echo $nota;
    $descripcion = ($nota >= 5? "SOBRESALIENTE" : "SUSPENDIDO");
    echo "<p>Juan Carlos ha tenido un {$descripcion}</p>";
       
    include "pie.php";
?>
