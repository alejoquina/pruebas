
<h1>listar usuarios</h1>
  	<a class="btn btn-primary" href="<?=RUTA_APP;?>usuario/crear" role="button">Crear</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">nombre</th>
          <th scope="col">apellido</th>
          <th scope="col">telefono</th>
          <th scope="col">correo</th>
          <th scope="col">cargo</th>
          <th scope="col">editar</th>
          <th scope="col">eliminar</th>

        </tr>
      </thead>
      
      <tbody>
      	   <?php foreach($usuarios as $usuario ): ?>
        <tr>
          
          <td><?=$usuario->nombre; ?></td>
          <td><?=$usuario->apellido; ?></td>
          <td><?=$usuario->telefono; ?></td>
          <td><?=$usuario->correo; ?></td>
          <td><?=$usuario->cargo; ?></td>
          <td><a href="<?=RUTA_APP;?>usuario/update_id&id=<?=$usuario->id;?>">actualizar</a></td>
          <td><a href="<?=RUTA_APP;?>usuario/delete&id=<?=$usuario->id;?>">eliminar</a></td>
        </tr>
        
      </tbody>
      <?php endforeach; ?>
    </table>