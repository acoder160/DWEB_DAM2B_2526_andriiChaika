<?php

      $resultado = 0;
      function areaCirculo($parametro){
           $resultado = pi() * pow($parametro, 2); 
             echo "<p>El área de un círculo de radio {$parametro} es " . number_format($resultado, 2) . "</p>";
}

?>
