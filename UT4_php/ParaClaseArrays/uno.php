
<?php
      include "includes/cabecera.php";
      include "funciones.php";
      
    $nombres = ["Ana", "Pedro", "Louis", "Esteban", "Maite", "Isabel"];
    verArray($nombres);
    array_push($nombres, "Juan Louis");
    verArray($nombres);
    echo "<p>Total alumnos en clase " . count($nombres) . "</p>";

    // Uso de foreach
    
    echo "<p>";
    foreach ($nombres as $nombre){
      echo "{$nombre} ";
    }
    echo "</p>";


    // Array asociativo

    $datosAlumnos = ["Ana" => 5, "Pedro" => 4, "Luis" => 7, "Esteban" => 8, "Maite" => 5, "Isabel" => 4.5];
    verArray($datosAlumnos);


    echo "<p>";
    $counter = 0;
    $suma = 0;
    foreach ($datosAlumnos as $clave => $valor){
      echo "{$clave} - {$valor}<br>";
      if ($valor >= 5){
        $counter++;
      }
      $suma += $valor;
    }
    echo "<br>Total aprobados {$counter}<br>Nota media del curso " . round($suma / count($datosAlumnos), 2) . "</p><hr>";
    echo "<h3>Ordenado descendente de nombre (las claves)</h3>";

    // krsort sirve para ordenar un array por su clave en el orden descendente // ksort para el orden ascedente
    krsort($datosAlumnos);
    echo "<p>";
    foreach ($datosAlumnos as $clave => $valor){
      echo "{$clave} - {$valor}<br>";
    }
    echo "</p><hr>";

     echo "<h3>Ordenado ascendente segun las notas (los valores)</h3>";
    //ordenar el array por las claven en el orden ascedente // arsort si fuera en orden descedente
    asort($datosAlumnos);
    echo "<p>";
    foreach ($datosAlumnos as $clave => $valor){
      echo "{$clave} - {$valor}<br>";
    }
    echo "</p>";


      
      include "includes/pie.php";
?>
