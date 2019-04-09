<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Devoluciones</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Id paquete</th>
      <th scope="col">Empleado</th>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha de alta</th>
      <th scope="col">Fecha de envio</th>
      <th scope="col">Fecha de devolución</th>
      <th scope="col">Motivo devolución</th>
    </tr>
  </thead>
  <tbody>
  <?php while($devolucion = $devoluciones->fetch_object()):?>
    <tr>
      <th scope="row"><?=$devolucion->idDevolucion?></th>
      <td><?=$devolucion->idPaquete?></td>
      <td><?=$devolucion->empleado?></td>
      <td><?=$devolucion->cliente?></td>
      <td><?=$devolucion->diaAlta?></td>
      <td><?=$devolucion->fechaEnvio?></td>
      <td><?=$devolucion->fechaDevolucion?></td>
      <td><?=$devolucion->motivoDevolucion?></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
<?php require_once 'Views/layout/footer.php'; ?>