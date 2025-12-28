<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <title>Formulario datos personales</title>
    </head>
    <body>
        <div id="contenido">
        <?php

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            // procesamos los datos para mostrarlos abajo
            echo "Ha introducido los siguientes datos<br>";
            
            // usuario y clave
            echo "Nombre: " . $_POST['usuario'] . "<br>";
            echo "Password: " . $_POST['clave'] . "<br>";
            echo "Sexo: " . $_POST['sexo'] . "<br>";

            // logica para mostrar el texto de la edad segun el value
            $edad = $_POST['edad'];
            $texto_edad = "";

            if ($edad == "0a19") {
                $texto_edad = "Entre 0 y 19 años";
            } elseif ($edad == "20a34") {
                $texto_edad = "Entre 20 y 34 años";
            } elseif ($edad == "35a65") {
                $texto_edad = "Entre 35 y 65 años";
            } else {
                $texto_edad = "Más de 65 años";
            }
            echo "Edad: " . $texto_edad . "<br>";

            // verificamos si sabe jugar al mus
            if (isset($_POST['mus'])) {
                echo "Usted sabe jugar al mus<br>";
            }

            // comentarios y pais
            echo "Sus comentarios: " . $_POST['comentarios'] . "<br>";
            echo "País: " . $_POST['pais'] . "<br>";

            // logica para recorrer el array de colores
            echo "Sus colores favoritos: ";
            if (isset($_POST['colores'])) {
                foreach ($_POST['colores'] as $color) {
                    echo $color . " ";
                }
            }
        ?>
        </div>
    </body>
</html>