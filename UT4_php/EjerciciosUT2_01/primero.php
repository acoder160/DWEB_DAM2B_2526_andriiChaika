

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
             <?php
                 echo "<p>Hola!, este es mi orimer ejercicio en PHP</p>
                 <hr>
                 <p>PHP es un lenguaje de script de servidor </p>
                 <p>Con la sentencia <span class='sentencia'>echo</span> mostramos informacion en el navegador</p>
                 <p>Si utilizo \\n puedo insertar saltos de linea en el codigo fuente del navegador</p>
                 <p>pero solo funciona con comillas dobles, no con las simples<p>
                 <p>22 es un numero</p>";
            ?>
            <h3>Ahora practicaremos con print</h3>
             <?php
                 print "<p>Hola!, este es mi orimer ejemplo utiliando <span class='sentencia'>print</span></p>";
                 print "<p>Las comillas simples tambien funcionan con <span class='sentencia'>print</span></p>";
             ?>
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
