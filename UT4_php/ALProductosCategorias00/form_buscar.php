
<?php
    $menu = 'menu.php';
    include "cabecera.php";
?>

<form id='form' action="#" method="post">
    <div id='datos'>
        <h3>Formulario de b&uacute;squeda</h3>
         <h4>Introduca el nombre y el precio  y se mostrar&aacute;n los productos
             que  contengan ese texto en su nombre y tengan un precio menor que el indicado  </h4>
    <label>Texto </label>
    <input type="text" name="texto"  />
    <span class="error">
         
    </span><br />
     <label>Precio </label>
    <input type="text" name="precio"   />
    <span class="error">
         
    </span><br />  
    
    <label>&nbsp;</label>
    <input type="submit" name="buscar" value="Buscar" /><br />
    </div>
</form>
<?php
     
    include "pie.php";
?>