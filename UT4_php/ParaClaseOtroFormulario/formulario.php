<?php
     include "cabecera.php";
?>
<form id='form' action="proceso_formulario.php" method="post">
    <div>
        <fieldset>
            <legend>Datos personales</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" /><br />
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" /><br />
            <label >Fecha nacimiento</label>
            
            <select name ="dia" id="dia">
                <?php
                     for ($i = 1; $i <= 31; $i++) {
                         echo "<option value='$i'>$i</option>";
                     }
                ?>
            </select>
            
            <select name="mes" id ="mes">
                <?php
                     $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                     
                     foreach ($meses as $mes) {
                         echo "<option value='$mes'>$mes</option>";
                     }
                ?>
            </select>
            
            <select name="anio" id="anio">
                <?php
                     for ($i = 1940; $i <= 2013; $i++) {
                         echo "<option value='$i'>$i</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
   <! ---------------------------------------- !>
   <div>
   <fieldset>
            <legend>Perfil profesional</legend>
            <label for="situacion">Situación laboral</label>
            <input type="radio" name="situacion" value ="activo" id="activo" /> <label class="situacion">Activo</label>
            <input type="radio" name="situacion" value ="parado/a" id="parado" /><label class="situacion">Parado/a</label><br/>
             <label >Perfil</label>
            <select name="perfil[]" id="perfil" multiple="multiple">
                <?php
                     $perfiles = array("Administración","Asesoría", "Comercial",
                                 "Programación", "Restauración");
                     
                     foreach ($perfiles as $perfil) {
                         echo "<option value='$perfil'>$perfil</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
   <! ---------------------------------------- !>
    <div>
   <fieldset>
            <legend>Formación</legend>
            <label for="nivel">Nivel</label>             
            <select name="nivel" id="nivel">
                <?php
                     $niveles = array("Sin estudios","Primaria", "ESO",
                                 "Bachillerato", "Universidad");
                      
                     foreach ($niveles as $nivel) {
                         echo "<option value='$nivel'>$nivel</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
      <! ---------------------------------------- !>
    <div>
         <fieldset>
            <legend>Idiomas</legend>
            <div class="idioma"><input type="checkbox" name="idiomas[]" value="Euskera" /><label>Euskera</label></div>
          <div class="idioma"><input type="checkbox" name="idiomas[]" value="Inglés" /><label>Inglés</label> </div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Francés" /><label>Francés</label> </div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Alemán" /><label>Alemán </label></div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Chino" /><label>Chino </label></div>
        <label>&nbsp;</label>
         </fieldset>
    </div>
   <div>
        <input type="submit" name="enviar" value="Enviar" id="enviar"/><br />
    </div>
</form>
<?php
     include "pie.php";
?>