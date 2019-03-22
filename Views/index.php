<?php 
require_once 'Config/parameters.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="<?= baseUrl ?>/Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= baseUrl ?>/Assets/Css/index.css">
    <title>PaqueTEC</title>
</head>

<body>
    <header class="header">
        <div class="barra bg-success">
            <div class="container">
                <nav class="navbar bg-transparent navbar-dark navbar-expand-md">
                    <a href="#" class="navbar-brand"><i class="fas fa-truck-loading"></i>PaqueTEC</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar Navegacion">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuPrincipal">
                        <ul class="navbar-nav w-100 justify-content-end">
                            <li class="nav-item">
                                <a href="#" id="popover" class="nav-link" data-toggle="popover" data-placement="bottom" data-container="body" title="Inicia sesion" data-content='
                                                <form action="<?= baseUrl ?>Empleado/logIn" id="formLogIn" method="POST">
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
                                                </form>
                                            '>
                                    Log in
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRegistro">Registro</a>
                            </li>
                            <div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title">Registrate</h2>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= baseUrl ?>Empleado/register" id="formRegistro" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="name">Nombre</label>
                                                        <input type="text" class="form-control" id="name" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="materno">Apellido materno</label>
                                                        <input type="text" class="form-control" id="materno" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="paterno">Apellido paterno</label>
                                                        <input type="text" class="form-control" id="paterno" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="email">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="email" class="form-control" id="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="edad">Edad</label>
                                                        <input type="number" class="form-control" id="edad" required>
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
                                                        <input type="text" class="form-control" id="telefono" required>
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
                                                        <input type="text" class="form-control" id="domicilio" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="rfc">RFC</label>
                                                        <input type="text" class="form-control" id="rfc" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="curp">CURP</label>
                                                        <input type="text" class="form-control" id="curp" required>
                                                    </div>
                                                    <input type="submit" class="btn btn-lg btn-primary" value="Enviar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= baseUrl ?>/Assets/Images/almacen.jpg" class=" w-100 img-fluid">
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-8">
                                <div class="carousel-caption text-center mb-sm-0 mb-lg-5">
                                    <h1>Bienvenido</h1>
                                    <h5 class="py-2">Rastrea tu paquete</h5>
                                    <form action="" method="get">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="col-md-12 d-flex">
                                                    <input class="form-control" id="busqueda" name="busqueda" type="text" />
                                                    <a href="" class="btn btn-primary"><i class="fas fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= baseUrl ?>Assets/Images/slide2.jpg" class="d-block w-100 ">
                    <div class="containter">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="carousel-caption cc-segundo mb-sm-0 mb-lg-5">
                                    <h1 class="display-4">Envío</h1>
                                    <p class="text-left ">¿Necesitas enviar un paquete? Ya sea que exportes, importes o
                                        tus envíos sean locales, PaqueTEC tiene una solución para ti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </header>
    <section class="container mt-5 text-center servicios">
        <h1 class="mb-5">Servicios</h1>
        <div class="row" style="border-color:red;">
            <div class="col-md-3">
                <div class="servicio">
                    <i class="fas fa-arrow-circle-up"></i>
                    <h2>Exportación</h2>
                    <p>Envíos internacionales de paquetes, documentos y objetos pesados</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="servicio">
                    <i class="fas fa-arrow-circle-down"></i>
                    <h2>Importación</h2>
                    <p>Envíos internacionales de paquetes, documentos y objetos pesados</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="servicio">
                    <i class="fas fa-truck"></i>
                    <h2>Nacional</h2>
                    <p>Envíos internacionales de paquetes, documentos y objetos pesados</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="servicio">
                    <i class="fas fa-cubes"></i>
                    <h2>Centro de Envío</h2>
                    <p>Envíos internacionales de paquetes, documentos y objetos pesados</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="mt-5">
        <div class="container ">
            <div class="pt-5 row justify-content-center">
                <div class="col-md-8 contacto">
                    <h2>Contacto</h2>
                    <p><i class="fas fa-envelope"></i>Cotacto@paqueTec.org.mx</p>
                    <p><i class="fas fa-phone"></i>412-34-85</p>
                    <p><i class="fas fa-map-marker-alt"></i>Avenida univerisad, Saltillo Coahuila</p>
                </div>
                <div class="row align-items-center">
                    <div class="sociales align">
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <strong>
                            <p>PaqueTec 2019 &copy;</p>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <script>
        $('#popover').popover({
            html: true,
            title: function() {
                return $("#popover-head").html();
            },
            content: function() {
                return $("#popover-content").html();
            }
        });
    </script>
</body>

</html> 