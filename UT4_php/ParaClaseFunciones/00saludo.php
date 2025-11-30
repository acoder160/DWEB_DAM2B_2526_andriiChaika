<?php
      include "includes/cabecera.php";

      
      function saludar(){
            echo "<p>Hola, esto es un saludo sin parametros</p>";
      }

      function saludarPersonalizado($nombre){
            echo"<p>Hola {$nombre}, cómo estas?</p>";
      }

      echo "<p>Primer saludo:<br></p>";
      saludar();
      echo "<p>Segundo saludo:<br></p>";
      saludar();
      echo "<p>Tercer saludo personalizado:<br></p>";
      saludarPersonalizado("Luis");
      echo "<hr>"; 

      $repeticiones = 1;
      while ($repeticiones <= 7){
            echo "<p>Saludo {$repeticiones}</p>"; saludar();
            $repeticiones ++;
      }


      include "includes/pie.php";
?>
