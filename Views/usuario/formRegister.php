<a  href="" class="nav-link" data-toggle="modal" data-target="#modalRegistro">Registro</a>
<div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title">Registrate</h2>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="<?=baseUrl?>Empleado/register" id="formRegistro" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="name">Nombre</label>
                                                        <input type="text" class="form-control" id="name" name="name" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="materno">Apellido materno</label>
                                                        <input type="text" class="form-control" id="materno" name="materno" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="paterno">Apellido paterno</label>
                                                        <input type="text" class="form-control" id="paterno" name="paterno" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="email">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="email" class="form-control" id="email" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="edad">Edad</label>
                                                        <input type="number" class="form-control" id="edad" name="edad" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="genero">Genero</label>
                                                        <select name="genero" id="genero" class="form-control custom-select" required>
                                                            <option value="MASCULINO">MASCULINO</option>
                                                            <option value="FEMENINO">FEMENINO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="telefono">Telefono</label>
                                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="colonia">Colonia</label>
                                                        <?php $colonias = Utils::showColonias(); ?>
                                                        <select name="colonia" id="colonia" class="form-control custom-select" required>
                                                            <?php while ($colonia = $colonias->fetch_object()) : ?>
                                                            <option value="<?= $colonia->idColonia ?>">
                                                                <?= $colonia->nombreColonia ?>
                                                            </option>
                                                            <?php endwhile; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="domicilio">Domicilio</label>
                                                        <input type="text" class="form-control" id="domicilio" name="domicilio" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="rfc">RFC</label>
                                                        <input type="text" class="form-control" id="rfc" name="rfc" >
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="curp">CURP</label>
                                                        <input type="text" class="form-control" id="curp" name="curp" required>
                                                    </div>
                                                    <input type="submit" class="btn btn-lg btn-primary" value="Enviar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>