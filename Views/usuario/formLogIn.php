<a href="" id="popover" class="nav-link" data-toggle="popover" data-placement="bottom" data-container="body" title="Inicia sesion" id="formLogIn" data-content='
                                                <form action="<?=baseUrl?>Empleado/logIn"> method="POST"
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="email">Email</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">@</span>
                                                                </div>
                                                                <input type="email" class="form-control" id="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="password">Password</label>                                                            
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                                </div>
                                                                <input type="password" class="form-control" id="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input class="btn btn-primary" type="submit" value="Enviar">
                                                </form>'>
                                    Log in
                                </a>
