<?php
    include "cabecera.php";

    $multiplicador = 4; // se puede modificar para ver tabla con otro numero
    
    echo "<h2>Generando tabla de multiplicar de un nº</h2>
    <h3>Tabla de multiplicar hasta el 8</h3>
    <table><th colspan='9'>X ------- 1 ------ 2 ------------- 3 ------- 4 ------------- 5 ------------- 6 ----------- 7 -------- 8  ----  9  ------ 10</th>";

    for ($j=1; $j <= 8; $j++) { 
        
        if ($j % 2 == 0){
            echo "<tr class='par'>";
            for ($i=1; $i <= 10; $i++) { 
            if ($i == 1){
            echo "<td>" . $j . "</td>";
            }

        echo "<td>" . $j * $i . "</td>";
            }
        } else {
            echo "<tr class='impar'>";
            for ($i=1; $i <= 10; $i++) { 
            if ($i == 1){
            echo "<td>" . $j . "</td>";
            }

        echo "<td>" . $j * $i . "</td>";

        }
        
        
    echo "</tr>";
    }    }
    
    echo "</table>";

    include "pie.php";
?>
