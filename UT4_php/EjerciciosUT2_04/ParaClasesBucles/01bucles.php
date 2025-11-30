<?php
    include "cabecera.php";
    echo "<h2>Lista de viñetas con for</h2>
    <ul>";
    for ($i=1; $i <= 10; $i++) { 
        echo "<li>Iteracion ${i}</li>";
    }
    echo "</ul>";


    echo "<h2>Lista de viñetas con while</h2>
    <ul>";
    $i = 1;
    while ($i <= 10) { 
        echo "<li>Iteracion ${i}</li>";
        $i++;
    }
    echo "</ul>";

    include "pie.php";
?>
