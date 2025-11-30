<?php
    include "cabecera.php";
    echo "
     <div id='menu'>
        <h2>Elige un pais</h2>
                <ul>
                     <li><a href='04if.php?pais=holanda'>Holanda</a></li>
                     <li><a href='04if.php?pais=belgica'>Belgica</a></li>
                    <li><a href='04if.php?pais=alemania'>Alemania</a></li>
                    <li><a href='04if.php?pais=francia'>Francia</a></li>
                </ul>
    </div></br><br><h3>Su capital es:</h3>";

    if (isset($_GET['pais'])){
        $pais = $_GET['pais'];
        switch ($pais) {
            case 'holanda':
                echo "<h2>Amsterdam</h2>";
                break;
            case 'belgica':
                echo "<h2>Brussels</h2>";
                break;
            case 'alemania':
                echo "<h2>Berlin</h2>";
                break;
            case 'francia':
                echo "<h2>Paris</h2>";
                break;
            default:
                echo "<h2>Pais desconocido</h2>";
        }
    }


    include "pie.php";
?>
