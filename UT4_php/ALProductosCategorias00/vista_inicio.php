<?php 
    
    $menu = "menu.php";
    include "cabecera.php";
    
   
?>
<table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php 
        // Verificamos si hay productos antes de intentar recorrerlos
        if (isset($productos) && count($productos) > 0): 
        ?>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['idProducto']; ?></td>
                    
                    <td><?php echo $producto['nombre']; ?></td>
                    
                    <td><?php echo $producto['precio'] . '€'; ?></td>
                </tr>
            <?php endforeach; ?>
            
        <?php else: ?>
            <tr>
                <td colspan="3">No hay productos disponibles.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
 include "pie.php";
?>
 
