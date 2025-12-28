<?php
     include "cabecera.php";
     require_once 'utilidades.php';
     

     verArray($_POST);
    
   
     $resultado = "<h3>Datos introducidos por el usuario</h3>";
     
     
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     
     if(empty($nombre) && empty($apellido)){
        $resultado .= "<p>No ha introducido nombre ni apellidos</p>";
     } else {
         // substr coge la primera letra (posicion 0, 1 caracter)
         $nombre_formateado = substr($nombre, 0, 1) . ". " . strtoupper($apellido);
         $resultado .= "<p>Nombre y apellidos: $nombre_formateado</p>";
     }

     // Fecha de nacimiento
     $dia = $_POST['dia'];
     $mes = $_POST['mes'];
     $anio = $_POST['anio'];
     $resultado .= "<p>Fecha nacimiento: $dia / $mes / $anio</p>";
     
     // Situacion laboral (Radio button)
     if (isset($_POST['situacion'])) {
         $resultado .= "<p>Situación laboral: " . $_POST['situacion'] . "</p>";
     } else {
         $resultado .= "<p>No ha seleccionado su situación laboral</p>";
     }
     
     // Perfil profesional 
     if (isset($_POST['perfil'])) {
         $lista_perfiles = implode(" ", $_POST['perfil']);
         $resultado .= "<p>Perfil profesional: $lista_perfiles</p>";
     } else {
         $resultado .= "<p>No ha seleccionado su perfil profesional</p>";
     }
     
     $nivel = $_POST['nivel'];
     $resultado .= "<p>Nivel de estudios: " . strtoupper($nivel) . "</p>";
     
     // Idiomas (Checkboxes) -> Array
     if (isset($_POST['idiomas'])) {
         $lista_idiomas = implode(" ", $_POST['idiomas']);
         $resultado .= "<p>Idiomas que conoce: $lista_idiomas</p>";
     } else {
         $resultado .= "<p>No ha seleccionado ningún idioma</p>";
     }
     
 
     echo "<div class='resultado'>";
     echo $resultado;
     echo "</div>";
     
     include "pie.php";
?>