<h2>Lista de Deportistas Registrados</h2>

<?php
if (empty($_SESSION['deportistas'])) {
    echo "<p>No se han encontrado datos de deportistas.</p>";
} else {
    $agrupados = array();

    foreach ($_SESSION['deportistas'] as $d) {
        // un deportista puede tener varios deportes, recorremos sus deportes
        foreach ($d['deportes'] as $deporte) {
            $agrupados[$deporte][] = $d; // añadimos el deportista
        }
    }

    // tablas por cada deporte
    foreach ($agrupados as $deporteNombre => $listaDeportistas) {
        echo "<h3>" . $deporteNombre . "</h3>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>Horario</th></tr>";
        
        foreach ($listaDeportistas as $p) {
            echo "<tr>";
            echo "<td>" . $p['nombre'] . "</td>";
            echo "<td>" . $p['apellido'] . "</td>";
            echo "<td>" . $p['horario'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
}
?>