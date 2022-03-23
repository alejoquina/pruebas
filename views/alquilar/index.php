<h1>alquilar</h1>

<form>
  
   <div class="mb-3 row">
          <label for="" class="col-sm-2 col-form-label">peliculas</label>
        
       <div class="col-sm-10">
              <select class="form-select" name="id_ejemplar" aria-label="Default select example" required>
                <option selected>seleccionar</option>
              
              <?php foreach($peliculas as $alquiler): ?>
              <option value="<?=$alquiler->id_ejemplar; ?>"><?=$alquiler->titulo; ?></option>
              <?php endforeach; ?> 

          </select>
          </div>
     </div>

     <div class="mb-3 row">
          <label for="" class="col-sm-2 col-form-label">usuarios</label>
        
       <div class="col-sm-10">
              <select class="form-select" name="id_cliente" aria-label="Default select example" required>
                <option selected>seleccionar</option>
              
              <?php foreach($clientes as $cliente): ?>
              	<option value="<?=$cliente->id_cliente; ?>"><?=$cliente->nombre.' '.$cliente->apellido;?></option>
              <?php endforeach; ?> 

          </select>
          </div>
     </div>

     <div class="mb-3 row">
     	<div class="form-group">
    		<label for="">fecha alquiler:</label>
   		 	<input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
  		</div>
  	</div>
    
    <?php $current_date = strtotime("today"); ?>
  	<div class="mb-3 row">
     	<div class="form-group">
    		<label for="">fecha devolucion:</label>
   		 	<input type="date" class="form-control" id="fecha_retorno" name="fecha_retorno" min="<?= date("Y/m/d", $current_date) ?>" max="<?= date('y/m/d', strtotime("+5 days", $current_date)); ?>" required>
  		</div>
  	</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>