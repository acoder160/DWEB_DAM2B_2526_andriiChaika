<?php
      include "includes/cabecera.php";
      include "inversion.php";
      
      
      echo "<p>Cantidad inicial {$cantidadInicial}</p>";
      echo "<p>Interés: {$interesMostrar} %</p>";
      echo "<p>Años: {$anios}</p>";
      echo "<p>Nueva cantidad: " . number_format($nuevaCantidad, 2, '.', ',') . "</p>";
      
      include "includes/pie.php";
?>
