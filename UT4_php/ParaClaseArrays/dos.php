
<?php
      include "includes/cabecera.php";
      include "funciones.php";
      
    $capitales = ["Italia" => "Roma", "Francia" => "Paris", "Alemania" => "Berlin", "Grecia" => "Atenas", "Irlanda" => "Dublin", "Portugal" => "Lisboa", "España" => "Madrid", "Austria" => "Vena"];
    verArray($capitales);

    ksort($capitales);
    echo "<h3>Ordenados por clave</h3>";
    verArray($capitales);

    arsort($capitales);
    echo "<h3>Ordenados por valores en orden descendente</h3>";
    verArray($capitales);

    if (array_key_exists("Italia", $capitales)){
        echo "<h3>Italia se encuentra entre los paises</h3>";
    }

    echo "<h3>Paises</h3>";
    $claves = [];
    foreach ($capitales as $clave => $valor){
      array_push($claves, $clave);
    }
    verArray($claves);



    echo "<h3>Capitales de la EU</h3>";
    $nombres = [];
    foreach ($capitales as $nombre){
      array_push($nombres, $nombre);
    }
    verArray($nombres);

    foreach ($capitales as $clave => $valor){
      echo "<h3>Pais: {$clave}, Capital: {$valor}</h3>";
    }
    

    


      
      include "includes/pie.php";
?>
