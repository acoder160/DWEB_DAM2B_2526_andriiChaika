<?php
      include "includes/cabecera.php";
      include 'funciones.php';

$productos = [
    "leche" => 1.95,
    "libro" => 23,
    "pan" => 1.80,
    "martillo" => 17,
    "toalla" => 25,
    "gafas" => 257.89
];

asort($productos);

verArray($productos);

echo "<h3 style='color: navy;'>Productos con precio menor de 20€</h3>";

echo "<table border='1' style='border-collapse: collapse; background-color: #ffe6cc;'>";

foreach ($productos as $nombre => $precio) {
    if ($precio < 20) {
        echo "<tr>";
        echo "<td style='padding: 5px;'>" . $nombre . "</td>";
        echo "</tr>";
    }
}

 echo "</table>";
    
        
      include "includes/pie.php";
?>
