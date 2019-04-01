<?php require_once 'Views/usuario/header.php'; ?>
<html>

<body class="h-100 logIn">
    <div class="container formLogIn h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="contenido p-5 bg-light">
                    <h2 class="text-center py-2 "><i class="fas fa-truck-loading"></i>LogIn</h2>
                    <?php if(isset($_SESSION['errorLog'])):?>
                        <h3 class="alert alert-danger text-center" role="alert"><?=$_SESSION['errorLog']?></h3>
                    <?php endif;?>
                    <?php Utils::deleteSession('errorLog');?>
                    <form action="<?=baseUrl?>Empleado/logIn" method="POST">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-lg" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>