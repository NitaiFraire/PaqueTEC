<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Entregas por fecha <i class="fas fa-calendar-day"></i></h1>

<div class="container-fluid my-5">
    <div class="row justify-content-start">
        <form action="<?= baseUrl ?>Paquete/buscarPorFecha" method="POST">
            <div class="form-row">
                <div class="form-group col-md-9">
                    <input type="date" name="fecha" id="fecha" class="form-control">
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
        <h2 class="text-center mt-5">No hay paquetes pendientes para entregar <i class="fas fa-clipboard-check"></i></h2>
    <?php else:?>        
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha de entrega</th>
            <th scope="col">Hora de entrega</th>
            </tr>
        </thead>
        <tbody>
        <?php while($paquete = $paquetes->fetch_object()):?>
            <tr>
            <th scope="row"><?=$paquete->idPaquete?></th>
            <td><?=$paquete->cliente?></td>
            <td><?=$paquete->fechaEntrega?></td>
            <td><?=$paquete->horaEntrega?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>




<?php require_once 'Views/layout/footer.php'; ?>