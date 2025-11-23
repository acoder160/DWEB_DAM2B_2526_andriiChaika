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
                    <h1 style='color: navy;'>Variables y tipos de datos</h1>
                    <hr>
                        <table>
                            <tr>
                                <th colspan='2' style='text-align: center;'>Datos de un alumno</th>
                            </tr>
                            <tr>
                                <td>Precio de un producto</td>
                                <td>". producto ."€</td>
                            </tr>
                            <tr>
                                <td>Descuento</td>
                                <td>". producto * descuento / 100 ."€</td>
                            </tr>
                            <tr>
                                <td>Precio con descuento</td>
                                <td>". producto - (producto * descuento / 100) ."€</td>
                            </tr>
                            <tr>
                                <td>Iva 8%</td>
                                <td>". producto * iva / 100 ."€</td>
                            </tr>
                            <tr>
                                <td>Precio final</td>
                                <td>". (producto - (producto * descuento / 100)) + (producto * iva / 100) ."€</td>
                            </tr>
                            </table>"
                 
             ?>
    </body>
</html>
