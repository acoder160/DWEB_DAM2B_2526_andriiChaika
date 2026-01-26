<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <h1>Gestión de Tareas (ASIR)</h1>
        <a href="index.php?accion=nueva" class="btn-add">➕ Nueva Tarea</a>
        <?php
       // require_once '..\modelo.php';
        $lista_tareas = obtener_tareas($conexion);
        ?>

        <div class="task-list">
            <?php 
            // Usas FOREACH porque ahora es un array puro de PHP
            foreach ($lista_tareas as $tarea) { 
            ?>
                <div class="task-card">
                    <h3><?php echo $tarea['title']; ?></h3>
                    <p><?php echo $tarea['description']; ?></p>
                    
                    <a href="index.php?accion=eliminar&id=<?php echo $tarea['id']; ?>">Eliminar</a>
        </div>
    <?php 
    } // Fin del foreach
    ?>
    </div>
</div>
</body>

</html>