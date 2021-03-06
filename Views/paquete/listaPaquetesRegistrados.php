<?php require_once 'Views/layout/header.php'; ?>
<?php $paquetes = Utils::showPaquetesPorEstado(0); ?>
  <h1 class="text-center">Paquetes registrados <i class="fas fa-file-signature"></i></h1>
<?php if($paquetes->num_rows == 0): ?>
  <h2 class="text-center mt-5">No hay paquetes registrados</h2>
<?php else: ?>

<table class="table table-striped mt-4">
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
      <th scope="row"><?=$paquete->idPaquete?></th>
      <td><?= $paquete->cliente ?></td>
      <td><?= $paquete->empleado ?></td>
      <td><?= $paquete->fechaAlta ?></td>
      <td><?= $paquete->fechaEnvio ?></td>
      <td><?= $paquete->fechaEntrega ?></td>
      <td><?= $paquete->horaEntrega ?></td>
      <td><?= $paquete->contenido ?></td>
      <td><?= $paquete->observaciones ?></td>
      <td>
      <?php if($_SESSION['identified']->idEmpleado == $paquete->idEmpleado): ?>
            <form action="<?= baseUrl ?>Paquete/estado" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <input type="hidden" name="paqueteId" value="<?= $paquete->idPaquete ?>">
                        <select name="estado" id="estado" class="custom-select">
                            <option value="0" <?= $paquete->estado == 0 ? 'selected' : '' ?>>Registrado</option>
                            <option value="1" <?= $paquete->estado == 1 ? 'selected' : '' ?>>Enviado</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                </div>
            </form>
        <?php else: ?>
          Registrado
        <?php endif; ?>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php endif; ?>
<?php require_once 'Views/layout/footer.php'; ?>