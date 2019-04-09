<?php require_once 'Views/layout/header.php'; ?>
<h1 class="text-center">Entregas por Cliente <i class="fas fa-user-check"></i></h1>

<div class="container-fluid my-5">
    <div class="row justify-content-start">
        <form action="<?= baseUrl ?>Paquete/buscarPorCliente" method="POST">
            <div class="form-row">
                <div class="form-group col-md-9">
                <?php $clientes = Utils::showClientes(); ?>
                    <select name="idCliente" id="idCliente" class="form-control custom-select" required>
                        <?php while ($cliente = $clientes->fetch_object()) : ?>
                        <option value="<?= $cliente->idCliente ?>">
                            Id: <?= $cliente->idCliente ?> <br> Nombre: <?= $cliente->nombre ?>
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
            <th scope="col">Empleado</th>
            <th scope="col">Fecha de entrega</th>
            <th scope="col">Contenido</th>
            </tr>
        </thead>
        <tbody>
        <?php while($paquete = $paquetes->fetch_object()):?>
            <tr>
            <th scope="row"><?=$paquete->idPaquete?></th>
            <td><?=$paquete->empleado?></td>
            <td><?=$paquete->fechaEntrega?></td>
            <td><?=$paquete->contenido?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>




<?php require_once 'Views/layout/footer.php'; ?>