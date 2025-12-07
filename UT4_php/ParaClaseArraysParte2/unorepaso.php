<?php
      include "includes/cabecera.php";
      include 'funciones.php';

    $numeros = [];
    $contador = 0;
    while ($contador < 10) {
        $numeros[] = rand(30, 50);
        $contador++;
    }

  
    sort($numeros);

  
    $contPares = 0;
    $sumaImpares = 0;


    foreach ($numeros as $num) {
        echo $num . " "; // Muestra el número y un espacio

      
        if ($num % 2 == 0) {
            $contPares++; // Es par
        } else {
            $sumaImpares += $num; 
        }
    }

  
    echo "<br>";
    echo "Pares: " . $contPares . "<br>";
    echo "Suma impares: " . $sumaImpares;
    
        
      include "includes/pie.php";
?>
