<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Devoluciones por Empleado <i class="fas fa-user-tie"></i></h1>
<div class="container-fluid my-5">
    <div class="row justify-content-start">
        <form action="<?= baseUrl ?>Paquete/buscarDevolucionPorEmpleado" method="POST">
            <div class="form-row">
                <div class="form-group col-md-9">
                <?php $empleados = Utils::showEmpleados(); ?>
                    <select name="idEmpleado" id="idEmpleado" class="form-control custom-select" required>
                        <?php while ($empleado = $empleados->fetch_object()) : ?>
                        <option value="<?= $empleado->idEmpleado ?>">
                            Id: <?= $empleado->idEmpleado ?>, Nombre: <?= $empleado->nombre ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">
                        Buscar <i class="fas fa-search ml-2"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php if(isset($paquetes)): ?>
    <?php if($paquetes->num_rows == 0): ?>
        <h2 class="text-center mt-5">No hay resultados</h2>
    <?php else:?>        
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID de guia</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fecha de entrega</th>
                <th scope="col">Fecha de devolución</th>
                <th scope="col">Motivo devolución</th>
            </tr>
        </thead>
        <tbody>
        <?php while($paquete = $paquetes->fetch_object()):?>
            <tr>
                <th scope="row"><?=$paquete->idPaquete?></th>
                <td><?=$paquete->cliente?></td>
                <td><?=$paquete->fechaEntrega?></td>
                <td><?=$paquete->fechaDevolucion?></td>
                <td><?=$paquete->motivoDevolucion?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>
<?php require_once 'Views/layout/footer.php'; ?>