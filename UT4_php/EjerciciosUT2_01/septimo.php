<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>quinto ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
             <?php
                 define('descuento', 25);
                 define('iva',8);
                 define('producto', 234.89);



                 echo "
                    <h1 style='color: navy;'>Mostrando una imagen</h1>
                        <hr>";
                    date_default_timezone_set("Europe/Madrid");

                echo "<p>Hora actual " . date("H:i:s") . "</p>
                    <p>Fecha actual " .date("l m,Y") . "</p>
                    <a href='sexto.php'>Mostrar dado aleatorio</a>";
                ?>
    </body>
</html>
