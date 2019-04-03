<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Empleados</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Paterno</th>
      <th scope="col">Materno</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Colonia</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
      <th scope="col">Pais</th>
      <th scope="col">Domicilio</th>
    </tr>
  </thead>
  <tbody>
  <?php while($empleado = $empleados->fetch_object()):?>
    <tr>
      <th scope="row"><?=$empleado->idEmpleado?></th>
      <td><?=$empleado->nombre?></td>
      <td><?=$empleado->paterno?></td>
      <td><?=$empleado->materno?></td>
      <td><?=$empleado->email?></td>
      <td><?=$empleado->telefono?></td>
      <td><?=$empleado->nombreColonia?></td>
      <td><?=$empleado->nombreCiudad?></td>
      <td><?=$empleado->nombreEstado?></td>
      <td><?=$empleado->nombrePais?></td>
      <td><?=$empleado->domicilio?></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
<?php require_once 'Views/layout/footer.php'; ?>
      