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
                 define('nombreDeInstituto','Maria Ana Sanz');
                 define('horas',5);
                 $nombre = "Pepe";
                 $edad = 23;
                 $altura = 1.78;
                 $modulo = "Implantación de aplicaciones web";
                 $pendientes = true;


                 echo "
                    <h1 style='color: navy;'>Variables y tipos de datos - Constantes</h1>
                    <hr>
                    <h2>Datos de un alumno</h2>
                    <p>Instituto:" . nombreDeInstituto . "</p>
                    <p>Nombre: $nombre</p>
                    <p>Edad: $edad</p>
                    <p>Altura: $altura</p>
                    <p>Modulo: $modulo</p>
                    <p>Horas: " . horas . "</p>
                    <p>Algo pendiente de primero?: " . ($pendientes? "1" : "0") . "</p>" ;
                 
             ?>
    </body>
</html>
