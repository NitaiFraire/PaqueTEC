<?php require_once 'Views/layout/header.php' ?>
<h1 class="text-center mt-2">Registro de empleado</h1>

<div class="container">
    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'success'): ?>
        <h2 class="alert alert-success text-center" role="alert">Empleado creado correctamente<i class="fas fa-check-circle ml-3"></i></h2>
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
        <h2 class="alert alert-danger text-center" role="alert">Error al crear empleado<i class="fas fa-times ml-3"></i></h2>
    <?php endif; ?>
    <?php Utils::deleteSession('register')?>
    <div class="justify-content-center">
        <form action="<?=baseUrl?>Empleado/register" class="my-3" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="materno">Apellido materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required pattern=".{6,}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control custom-select" required>
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pais">Pais</label>
                    <?php $paises = Utils::showPaises(); ?>
                    <select name="pais" id="pais" class="form-control custom-select" required>
                        <?php while ($pais = $paises->fetch_object()) : ?>
                        <option value="<?= $pais->idPais ?>">
                            <?= $pais->nombrePais ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control custom-select">
                            <option selected="selected">Selecciona un país</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ciudad">Ciudad</label>
                    <select name="ciudad" id="ciudad" class="form-control custom-select">
                        <option selected="selected">Selecciona una estado</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="colonia">Colonia</label>
                    <select name="colonia" id="colonia" class="form-control custom-select">
                        <option selected="selected">Selecciona una ciudad</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" pattern="[A-Z0-9]{13}">
                </div>
                <div class="form-group col-md-6">
                    <label for="curp">CURP</label>
                    <input type="text" class="form-control" id="curp" name="curp" required pattern="[A-Z0-9]{18}">
                </div>
            </div>
            <input type="submit" class="btn btn-lg btn-primary mt-3" value="Enviar">
        </form>
    </div>
</div>

<?php require_once 'Views/layout/footer.php'; ?>