<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Clientes</h1>
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
  <?php while($cliente = $clientes->fetch_object()):?>
    <tr>
      <th scope="row"><?=$cliente->idCliente?></th>
      <td><?=$cliente->nombre?></td>
      <td><?=$cliente->paterno?></td>
      <td><?=$cliente->materno?></td>
      <td><?=$cliente->email?></td>
      <td><?=$cliente->telefono?></td>
      <td><?=$cliente->nombreColonia?></td>
      <td><?=$cliente->nombreCiudad?></td>
      <td><?=$cliente->nombreEstado?></td>
      <td><?=$cliente->nombrePais?></td>
      <td><?=$cliente->domicilio?></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
<?php require_once 'Views/layout/footer.php'; ?>