<?php
    include "cabecera.php";
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if($nombre == 'monkey'){
            echo "<img src='images/{$nombre}.gif'/>";
        } else {
            echo "<img src='images/{$nombre}.jpg'/>";
        }
        
        
    } else {
        echo "<p>Pulse enlace para ver la imagen</p>";
    }
    include "pie.php";
?>
