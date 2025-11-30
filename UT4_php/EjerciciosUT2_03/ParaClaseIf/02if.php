<?php
    include "cabecera.php";
    echo "
     <div id='menu'>
        <h2>Elige una idioma</h2>
                <ul>
                     <li><a href='02if.php?idioma=castellano'>Castellano</a></li>
                     <li><a href='02if.php?idioma=ingles'>Inglés</a></li>
                    <li><a href='02if.php?idioma=frances'>Francés</a></li>
                </ul>
    </div></br><br>";

    if (isset($_GET['idioma'])){
        $idioma = $_GET['idioma'];
        switch ($idioma) {
            case 'castellano':
                echo "<h2>Bienvenido</h2>";
                break;
            case 'ingles':
                echo "<h2>Welcome</h2>";
                break;
            case 'frances':
                echo "<h2>Bienvenue</h2>";
                break;
            default:
                echo "<h2>Idioma desconocido</h2>";
        }
    }


    include "pie.php";
?>
