
<?php
      include "includes/cabecera.php";
      include "funciones.php";
     
      $libro1 = ["ISBBN" => "124356-A", "TITULO" => "El asedio", "AUTOR" => "Arturo Pérez Reverte", "PRECIO" => "22.5"];
      echo "<p>";
    foreach ($libro1 as $clave => $valor){
      echo "{$clave} - {$valor}<br>";
    }
    echo "</p>";
    $libro2 = ["ISBBN" => "122222-N", "TITULO" => "La reina del sur", "AUTOR" => "Arturo Pérez Reverte", "PRECIO" => "20"];
    $libro3 = ["ISBBN" => "151116-P", "TITULO" => "El muestro de esgrima", "AUTOR" => "Arturo Pérez Reverte", "PRECIO" => "9"];

    $libros = [$libro1, $libro2, $libro3];
    verArray($libros);

    echo "<p>";
    foreach ($libros as $indice => $libro){
      foreach ($libro as $clave => $valor){
            echo strtoupper($clave) . " - {$valor}<br>";
      }
      echo "<hr><br>";
    }
    echo "</p><hr>";

      
      include "includes/pie.php";
?>
