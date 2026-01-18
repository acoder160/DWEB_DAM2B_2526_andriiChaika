<?php
// recuperamos datos y errores si existen
$data = isset($_SESSION['formData']) ? $_SESSION['formData'] : array();
$err = isset($_SESSION['errores']) ? $_SESSION['errores'] : array();

// helper para checkboxes
function isSelected($val, $arr) {
    if (isset($arr['deportes']) && is_array($arr['deportes'])) {
        return in_array($val, $arr['deportes']) ? 'checked' : '';
    }
    return '';
}
?>

<h2>Formulario de Registro</h2>
<form action="index.php" method="POST">
    <input type="hidden" name="accion" value="registrar">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?php echo isset($data['nombre']) ? $data['nombre'] : ''; ?>">
    <?php if(isset($err['nombre'])) echo "<span class='error'>".$err['nombre']."</span>"; ?>
    <br><br>

    <label>Apellido:</label><br>
    <input type="text" name="apellido" value="<?php echo isset($data['apellido']) ? $data['apellido'] : ''; ?>">
    <?php if(isset($err['apellido'])) echo "<span class='error'>".$err['apellido']."</span>"; ?>
    <br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" value="<?php echo isset($data['edad']) ? $data['edad'] : ''; ?>">
    <?php if(isset($err['edad'])) echo "<span class='error'>".$err['edad']."</span>"; ?>
    <br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="Hombre" <?php echo (isset($data['sexo']) && $data['sexo']=='Hombre') ? 'checked' : ''; ?>> Hombre
    <input type="radio" name="sexo" value="Mujer" <?php echo (isset($data['sexo']) && $data['sexo']=='Mujer') ? 'checked' : ''; ?>> Mujer
    <input type="radio" name="sexo" value="Otro" <?php echo (isset($data['sexo']) && $data['sexo']=='Otro') ? 'checked' : ''; ?>> Otro
    <?php if(isset($err['sexo'])) echo "<span class='error'>".$err['sexo']."</span>"; ?>
    <br><br>

    <label>Deportes favoritos:</label><br>
    <input type="checkbox" name="deportes[]" value="Futbol" <?php echo isSelected('Futbol', $data); ?>> Fútbol
    <input type="checkbox" name="deportes[]" value="Tenis" <?php echo isSelected('Tenis', $data); ?>> Tenis
    <input type="checkbox" name="deportes[]" value="Padel" <?php echo isSelected('Padel', $data); ?>> Padel
    <input type="checkbox" name="deportes[]" value="Natacion" <?php echo isSelected('Natacion', $data); ?>> Natación
    <input type="checkbox" name="deportes[]" value="Beisbol" <?php echo isSelected('Beisbol', $data); ?>> Béisbol
    <?php if(isset($err['deportes'])) echo "<span class='error'>".$err['deportes']."</span>"; ?>
    <br><br>

    <label>Horario preferido:</label><br>
    <select name="horario">
        <option value="">Seleccione...</option>
        <option value="Mañanas" <?php echo (isset($data['horario']) && $data['horario']=='Mañanas') ? 'selected' : ''; ?>>Mañanas</option>
        <option value="Tardes" <?php echo (isset($data['horario']) && $data['horario']=='Tardes') ? 'selected' : ''; ?>>Tardes</option>
        <option value="Mañanas y Tardes" <?php echo (isset($data['horario']) && $data['horario']=='Mañanas y Tardes') ? 'selected' : ''; ?>>Mañanas y Tardes</option>
    </select>
    <?php if(isset($err['horario'])) echo "<span class='error'>".$err['horario']."</span>"; ?>
    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
    <?php if(isset($err['email'])) echo "<span class='error'>".$err['email']."</span>"; ?>
    <br><br>

    <input type="submit" value="Registrar">
</form>