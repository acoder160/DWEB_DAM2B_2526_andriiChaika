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
                $valor1 = rand(1, 6);
                $valor2 = rand(1, 6);
                 echo "
                    <h1 style='color: navy;'>Mostrando una imagen</h1>
                    <hr>
                        <img src='images/{$valor1}.gif'/>
                        <img src='images/{$valor2}.gif'/>
                        <a href='octavo.php'>Recargar</a>";
             ?>
    </body>
</html>
