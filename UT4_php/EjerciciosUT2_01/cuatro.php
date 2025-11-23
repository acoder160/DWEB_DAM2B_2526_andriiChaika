<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Segundo ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
             <?php
                 $valor1 = 23;
                 $valor2 = 80;
                 $cantidadArticuos = 12;



                 echo "
                    <h2>Trabajando con variables</h2>
                    <p>El valor de $valor1 es " . $valor1 . "</p>
                    <p>El valor de $valor2 es " . $valor2 . "</p>
                    <p>La suma de " . $valor1 . " y " . $valor2 . " es " . $valor1+$valor2 . " </p>
                    <p>La resta de " . $valor1 . " y " . $valor2 . " es " . $valor1-$valor2 . " </p>
                    <p>El producto de " . $valor1 . " y " . $valor2 . " es " . $valor1 % $valor2 . " </p>
                    <p>Hay actualmente " . $cantidadArticuos . " articulos</p>
                    "; 
                    $cantidadArticuos ++;
                echo "
                    <p>Ahora hay " . $cantidadArticuos . " articulos</p>
                    ";
                    $cantidadArticuos --;
                echo "
                    <p>Ahora hay " . $cantidadArticuos . " articulos</p>
                    ";
                    $cantidadArticuos += 10;
                echo "
                    <p>Ahora hay " . $cantidadArticuos . " articulos</p>
                    ";
             ?>
    </body>
</html>
