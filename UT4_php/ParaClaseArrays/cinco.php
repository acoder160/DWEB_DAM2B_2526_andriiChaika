<?php
      include "includes/cabecera.php";
      include "funciones.php";

$notas = [
    "PEDRO" => ["AWEB" => 6, "SEAD" => 7, "SERI" => 5, "FOL" => 4, "IMSO" => 8],
    "LUIS"  => ["AWEB" => 4, "SEAD" => 8, "SERI" => 7, "FOL" => 8, "IMSO" => 9],
    "ANA"   => ["AWEB" => 5, "SEAD" => 8, "SERI" => 7, "FOL" => 9, "IMSO" => 5],
    "JORGE" => ["AWEB" => 8, "SEAD" => 9, "SERI" => 7, "FOL" => 6, "IMSO" => 6]
];

echo "Nota de JORGE en SERI: " . $notas["JORGE"]["SERI"] . "<br>";

$sumaAna = 0;
foreach ($notas["ANA"] as $nota) {
    $sumaAna = $sumaAna + $nota;
}
$mediaAna = $sumaAna / 5;
echo "Nota media de ANA: " . $mediaAna . "<br>";

$sumaSead = 0;
foreach ($notas as $alumno) {
    $sumaSead = $sumaSead + $alumno["SEAD"];
}
$mediaSead = $sumaSead / 4;
echo "Nota media en SEAD: " . $mediaSead . "<br><br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td></td>";
echo "<td>AWEB</td>";
echo "<td>SEAD</td>";
echo "<td>SERI</td>";
echo "<td>FOL</td>";
echo "<td>IMSO</td>";
echo "</tr>";

foreach ($notas as $nombre => $asignaturas) {
    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    foreach ($asignaturas as $nota) {
        echo "<td>" . $nota . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "Nombre completo de SEAD: " . nombreCompletoDe("SEAD") . "<br>";
echo "Nombre completo de SERI: " . nombreCompletoDe("SERI") . "<br>";

      include "includes/pie.php";

?>