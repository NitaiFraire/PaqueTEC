<?php require_once 'Views/layout/header.php' ?>

<h1 class="text-center">Registro de paquete<i class="fas fa-mail-bulk mx-3"></i></h1>
<div class="container ">
    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'success'): ?>
        <h2 class="alert alert-success text-center" role="alert">Paquete registrado correctamente<i class="fas fa-check-circle ml-3"></i></h2>
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
        <h2 class="alert alert-danger text-center" role="alert">Error al registrar paquete<i class="fas fa-times ml-3"></i></h2>
    <?php endif; ?>
    <?php Utils::deleteSession('register')?>
    <div class="justify-content-center">
        <form action="<?=baseUrl?>Paquete/register" class="my-3" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cliente">Cliente</label>
                    <?php $clientes = Utils::showclientes() ?>
                    <select name="cliente" id="cliente" class="form-control custom-select" required>
                        <?php while($cliente = $clientes->fetch_object()): ?>
                            <option value="<?= $cliente->idCliente?>">
                                <?= $cliente->nombre . ' ' .$cliente->paterno . ' ' . $cliente->materno?>
                            </option>
                        <?php endwhile;?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" id="peso" name="peso" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="precioEnvio">Precio de envio</label>
                    <input type="text" class="form-control" id="precioEnvio" name="precioEnvio" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diaAlta">Fecha de alta</label>
                    <input type="date" class="form-control" id="diaAlta" name="fechaAlta" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="diaEnvio">Fecha de envio</label>
                    <input type="date" class="form-control" id="diaEnvio" name="fechaEnvio" required> 
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diaAlta">Fecha de entrega</label>
                    <input type="date" class="form-control" id="diaAlta" name="fechaEntrega" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="diaEnvio">hora de entrega</label>
                    <input type="time" class="form-control" id="diaEnvio" name="horaEntrega" required> 
                </div>
            </div>
            <div class="form-row">
                    Contenido
                <div class="form-group col-md-5">
                    <textarea name="contenido" id="contenido" cols="50" rows="5" required></textarea>
                </div>
                    <label for="observaciones">Observaciones</label>
                <div class="form-group col-md-5">
                    <textarea name="observaciones" id="observaciones" cols="50" rows="5"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-lg btn-primary mt-3" value="Enviar">
        </form>
    </div>
</div>
<?php require_once 'Views/layout/footer.php' ?>
