<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Tarea</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Añadir Nueva Tarea</h1>
        
        <form action="index.php?accion=guardar" method="POST">
            
            <label>Título:</label>
            <input type="text" name="input_titulo" required maxlength="255" placeholder="Ej: Comprar pan">
            
            <label>Descripción:</label>
            <textarea name="input_descripcion" placeholder="Detalles de la tarea..."></textarea>
            
            <button type="submit">Guardar Tarea</button>
            <a href="index.php">Cancelar</a>
        </form>
    </div>
</body>
</html>