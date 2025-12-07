<?php
    include "includes/cabecera.php";
    include 'funciones.php';

    $equipo = [
        "jugador1" => ["nombre" => "Messi",   "sueldo" => 20, "goles" => 18],
        "jugador2" => ["nombre" => "Iniesta", "sueldo" => 15, "goles" => 16],
        "jugador3" => ["nombre" => "Neymar",  "sueldo" => 17, "goles" => 14],
        "jugador4" => ["nombre" => "Puyol",   "sueldo" => 9,  "goles" => 6]
    ];

    echo "<div class='jugador'>";
    foreach ($equipo["jugador2"] as $clave => $valor) {
        echo "$clave: $valor<br>";
    }
    echo "</div>";

    echo "<br>";

    echo "<h3 class='resultado'>El sueldo de Neymar es : " . $equipo["jugador3"]["sueldo"] . " millones de €</h3>";


    $totalGoles = 0;
    $sumaSueldos = 0;
    $cantidadJugadores = count($equipo);

    foreach ($equipo as $jugador) {
        $totalGoles += $jugador["goles"];
        $sumaSueldos += $jugador["sueldo"];
    }

    $mediaSueldo = $sumaSueldos / $cantidadJugadores;

    echo "<h3 class='resultado'>Total goles : " . $totalGoles . "</h3>";
    echo "<h3 class='resultado'>Media sueldo : " . number_format($mediaSueldo, 2) . " millones de €</h3>";

    echo "<br>";

    
    echo "<table>";
    
    echo "<th colspan='4' style='color: blue;'>Equipo Completo</th>";
    echo "<tr>"; 
    echo "<td></td>"; 
    echo "<td>nombre</td>";
    echo "<td>sueldo</td>";
    echo "<td>goles</td>";
    echo "</tr>";


    foreach ($equipo as $claveJugador => $datos) {
        echo "<tr>";
      
        echo "<td>" . $claveJugador . "</td>";
        

        echo "<td>" . $datos['nombre'] . "</td>";
        echo "<td>" . $datos['sueldo'] . "</td>";
        echo "<td>" . $datos['goles'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
        
    include "includes/pie.php";
?>