<h2>Relación de productos en orden descendente de precio</h2>
<div class="lista-productos">
    <?php foreach ($datos as $producto): ?>
        <div>
            <?php echo $producto['nombre']; ?> -- <?php echo $producto['precio']; ?>€
        </div>
    <?php endforeach; ?>
</div>