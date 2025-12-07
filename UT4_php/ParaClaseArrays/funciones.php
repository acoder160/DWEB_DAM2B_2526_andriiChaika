<?php

    function verArray($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function queCodigoPostalTiene($nombre){
        $codigosPostales = ["ROCHAPEA" => 31014, "SAN JUAN" => 31011, "CHANTREA" => 31015, "ITURRAMA" => 31007, "BUZTINTXURI" => 31012, "MENDILLORI" => 31016, ];

        echo "<p>El codigo postal de {$nombre}: {$codigosPostales[$nombre]}</p><hr>";
    }

function nombreCompletoDe($siglas) {
    $asignaturas = [
        "AWEB" => "IMPLANTACIÓN DE APLICACIONES WEB",
        "SEAD" => "SEGURIDAD Y ALTA DISPONIBILIDAD",
        "SERI" => "SERVICIOS DE RED E INTERNET",
        "FOL"  => "FORMACIÓN Y ORIENTACIÓN LABORAL",
        "IMSO" => "IMPLANTACIÓN DE SISTEMAS OPERATIVOS"
    ];

    if (isset($asignaturas[$siglas])) {
        return $asignaturas[$siglas];
    } else {
        return "DESCONOCIDA";
    }
}
?>
