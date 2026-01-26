<h2>Categorías</h2>
<ul>
    <?php foreach ($datos as $categoria): ?>
        <li><?php echo $categoria['nombre']; ?></li>
    <?php endforeach; ?>
</ul>