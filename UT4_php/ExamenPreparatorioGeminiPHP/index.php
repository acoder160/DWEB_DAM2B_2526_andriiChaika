<?php
include 'datos.php';
include 'funciones.php';

echo '<p>Mostrando solo productos de la categotia Moviles</p>';
foreach($productos as $clave => $valor){
    if ($valor['categoria'] == 'Moviles'){
        echo "<p>Producto: " . $valor['nombre'] . "</p>";
    }
}


echo '<p>Mostrando productos con el precio mayor que 100</p><table>';

foreach($productos as $clave => $valor){
    if ($valor['precio'] > 100){
        echo "<tr><td>Producto: " . $valor['nombre'] . " con el precio de " . $valor['precio'] . "</p></td></tr>";
    }
}

echo "</table>";
echo 'Tarea 5: el nombre formateado, el precio original y el precio con un "IVA del 21%<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Precio con IVA 25%</th>
    </tr>';

foreach($productos as $clave => $valor){
    echo'<tr><td>' . formatearNombre($valor['nombre']) . '</td>
    <td>' . $valor['precio'] . '</td>
    <td>' . $valor['precio'] * 1.25 . '</td></tr>';
}
echo "</table>";
?>