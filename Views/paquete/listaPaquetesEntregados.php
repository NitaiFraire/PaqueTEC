<?php require_once 'Views/layout/header.php'; ?>
<?php $paquetes = Utils::showPaquetesPorEstado(2); ?>
  <h1 class="text-center">Paquetes entregados <i class="fas fa-box-open"></i></h1>
<?php if($paquetes->num_rows == 0): ?>
  <h2 class="text-center mt-5">No hay paquetes entregados</h2>
<?php else: ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cliente</th>
      <th scope="col">Empleado</th>
      <th scope="col">Fecha de alta</th>
      <th scope="col">Fecha de envio</th>
      <th scope="col">Fecha de entrega</th>
      <th scope="col">Hora de entrega</th>
      <th scope="col">Contenido</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>

  <?php while($paquete = $paquetes->fetch_object()): ?>
    <tr>
      <th scope="row"><?= $paquete->idPaquete ?></th>
      <td><?= $paquete->cliente ?></td>
      <td><?= $paquete->empleado ?></td>
      <td><?= $paquete->fechaAlta ?></td>
      <td><?= $paquete->fechaEnvio ?></td>
      <td><?= $paquete->fechaEntrega ?></td>
      <td><?= $paquete->horaEntrega ?></td>
      <td><?= $paquete->contenido ?></td>
      <td><?= $paquete->observaciones ?></td>
      <th scope="row"  class="alert alert-success">Entregado</th>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php endif; ?>
<?php require_once 'Views/layout/footer.php'; ?>