<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title></title>
    </head>
    <body>
        <div id="contenido">
            <?php
             include '../index.php';
             echo "<p>Mi nombre es {$nombre} y voy a tirar un dado {$veces} y sumar las<br>tiradas<br>La suma de las tiradas {$suma}</p>";
            ?>
        </div>

    </body>
</html>
