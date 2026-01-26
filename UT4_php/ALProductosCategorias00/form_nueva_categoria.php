
<?php
     $menu = 'menu.php';
    include "cabecera.php";
?>

<form id='form' action="#" method="post">
    <div id='datos'>
    <label>Nombre categor&iacute;a</label>
    <input type="text" name="nombre" />
    <span class="error"> </span><br />
    
    <br />
    
    <label>&nbsp;</label>
    <input type="submit" name="nuevacat" value="Nueva categor&iacute;a" /><br />
    </div>
</form>
<?php
    include "pie.php";
?>