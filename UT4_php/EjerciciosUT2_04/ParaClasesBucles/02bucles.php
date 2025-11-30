<?php
    include "cabecera.php";
    echo "<h2>Simulando notas de un clase y contando aprobados</h2>";

    // simulo 20 alumnos
    define("cantidadAlumnos", 20);
    for ($i=0; $i < cantidadAlumnos; $i++) { 
        define("alumno{$i}", rand(1, 10));
    }
    $alumnosAprobados = 0;
    for ($i=0; $i < cantidadAlumnos; $i++) { 
        if (constant("alumno{$i}") >= 5){
            $alumnosAprobados ++;
        }
    }

    echo "<p>Total aprobados {$alumnosAprobados}</p>";

    include "pie.php";
?>
