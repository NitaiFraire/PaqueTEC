<?php require_once 'Views/layout/header.php' ?>

<h1 class="text-center">Registro de devolución <i class="fas fa-undo-alt"></i></h1>
<div class="container ">
    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'success'): ?>
    <h2 class="alert alert-success text-center" role="alert">Devolución registrada correctamente<i
            class="fas fa-check-circle ml-3"></i></h2>
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <h2 class="alert alert-danger text-center" role="alert">Error al registrar devolución<i
            class="fas fa-times ml-3"></i></h2>
    <?php endif; ?>
    <?php Utils::deleteSession('register')?>
    <div class="justify-content-center">
        <form action="<?=baseUrl?>Devolucion/register" class="my-3" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cliente">Datos del paquete</label>
                    <?php if(isset($paquete)): ?>
                        <p> 
                            <input type="hidden" name="idPaquete" value="<?= $paquete->idPaquete?>">
                            <strong>Id de paquete:</strong>  <?= $paquete->idPaquete  ?>
                            <br>
                            <strong>Contenido:</strong> <?= $paquete->contenido ?>
                        </p>
                    <?php else:?>
                        <p>No existe el paquete</p>
                    <?php endif;?>

                </div>
                <div class="form-group col-md-6">
                    <label for="fechaDevolucion">Fecha de devolución</label>
                    <input type="date" class="form-control" id="fechaDevolucion" name="fechaDevolucion" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="motivoDevolucion">Motivo de devolución</label>
                    <textarea name="motivoDevolucion" id="motivoDevolucion" cols="100" rows="5"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-lg btn-primary mt-3" value="Enviar">
        </form>
    </div>
</div>
<?php require_once 'Views/layout/footer.php' ?>