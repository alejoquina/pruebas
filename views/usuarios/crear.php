
<?php if(isset($update) && isset($usuario_id) && is_object($usuario_id) ): ?>
  <?php $ruta = RUTA_APP.'usuario/update&id='.$usuario_id->id; ?> 
  <h1>ACTUALIZAR USUARIO</h1>

<?php else: ?>
  <?php $ruta = RUTA_APP.'usuario/save'; ?>
   <h1>CREAR USUARIOS</h1>
<?php endif; ?>

<form method="POST" action="<?=$ruta; ?>">
  <div class="form-group">
    <label for="">nombre:</label>
    <input type="text" class="form-control" id="" name="nombre" value="<?=isset($usuario_id) && is_object($usuario_id)?$usuario_id->nombre : '' ?>"  placeholder="ingresar nombre" required>
  </div>
  
  <div class="form-group">
    <label for="">apellido:</label>
    <input type="text" class="form-control" id="" name="apellido" value="<?=isset($usuario_id) && is_object($usuario_id)?$usuario_id->apellido : '' ?>"  placeholder="ingresar apellido"required>
  </div>

  <div class="form-group">
    <label for="">telefono:</label>
    <input type="number" class="form-control" id="" name="telefono" value="<?=isset($usuario_id) && is_object($usuario_id)?$usuario_id->telefono : '' ?>" placeholder="ingresar telefono"required>
  </div>

  <div class="form-group">
    <label for="">correo:</label>
    <input type="email" class="form-control" id=""  name="correo" value="<?=isset($usuario_id) && is_object($usuario_id)?$usuario_id->correo : '' ?>" placeholder="ingresar correo"required>
  </div>

  <div class="form-group">
    <label for="">cargo:</label>
    <input type="text" class="form-control" id="" name="cargo" value="<?=isset($usuario_id) && is_object($usuario_id)?$usuario_id->cargo : '' ?>" placeholder="ingresar cargo"required>
  </div>
  	<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>