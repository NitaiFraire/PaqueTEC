<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Paquetes</h1>
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
  <?php while($paquete = $paquetes->fetch_object()):?>
    <tr>
      <th scope="row"><?=$paquete->idPaquete?></th>
      <td><?=$paquete->cliente?></td>
      <td><?=$paquete->empleado?></td>
      <td><?=$paquete->diaAlta?></td>
      <td><?=$paquete->fechaEnvio?></td>
      <td><?=$paquete->fechaEntrega?></td>
      <td><?=$paquete->horaEntrega?></td>
      <td><?=$paquete->contenido?></td>
      <td><?=$paquete->observaciones?></td>
      
      <?php if($paquete->estado == 0):?>
        <th scope="row" class="alert alert-info">
            Registrado
        </th>
      <?php elseif($paquete->estado == 1):?>
        <th scope="row"  class="alert alert-danger">
            Enviado
        </th>
      <?php else: ?>
        <th scope="row"  class="alert alert-success">
            Entregado
        </th>
      <?php endif;?>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
<?php require_once 'Views/layout/footer.php'; ?>