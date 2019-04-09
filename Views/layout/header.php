<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="<?= baseUrl ?>Assets/Css/panel.css">
    <title>Admin | PaqueTEC</title>
</head>

<body>
    <div class="pagina">
        <header class="header">
            <div class="nombre-sitio">
                <h1 class="escritorio">
                    <i class="fas fa-truck-loading"></i> PaqueTEC
                </h1>
                <h1 class="movil">
                    <i class="fas fa-truck-loading"></i>
                </h1>
            </div>
            <div class="barra">
                <div class="menu-izquierdo">
                    <i class="fas fa-arrow-left"></i>
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="menu-derecho">
                    <div class="cerrar caja">
                        <a href="<?= baseUrl ?>Empleado/logOut">
                            <i class="fas fa-sign-out-alt"></i>Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="contenedor-principal">
            <aside class="sidebar">
                <div class="usuario">
                    <img src="<?= baseUrl ?>/Assets/Images/usuario.svg" alt="">
                    <p>Bienvenido: <span><?= $_SESSION['identified']->nombre?></span></p>
                </div>
                <div class="menu-admin">
                    <h2>Menú</h2>
                    <ul class="menu">
                        <?php if(isset($_SESSION['admin'])):?>
                        <li>
                            <a href="#"><i class="fas fa-user-tie"></i> Empleados</a>
                            <ul>
                                <li>
                                    <a href="<?= baseUrl ?>Empleado/formRegister"><i class="fas fa-plus"></i> Agregar nuevo</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Empleado/getAll"><i class="fas fa-list"></i> Ver Todos</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="#"><i class="fas fa-address-book"></i> Clientes</a>
                            <ul>
                                <li>
                                    <a href="<?= baseUrl ?>Cliente/formRegister"><i class="fas fa-plus"></i> Agregar nuevo</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Cliente/getAll"><i class="fas fa-list"></i> Ver Todos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-box"></i> Paquetes</a>
                            <ul>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/formRegister"><i class="fas fa-plus"></i> Agregar nuevo</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/index"><i class="fas fa-list"></i> Ver Todos</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/registrados"><i class="fas fa-file-signature"></i> Registrados</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/enviados"><i class="fas fa-route"></i> Enviados</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/entregados"><i class="fas fa-box-open"></i> Entregados</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/entregasPorFecha"><i class="fas fa-calendar-day"></i> Entrega por fecha</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/entregasPorCliente"><i class="fas fa-user-check"></i> Entrega por cliente</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/entregasPorEmpleado"><i class="fas fa-user-tie"></i> Entrega por empleado</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-undo-alt"></i> Devoluciones</a>
                            <ul>
                                <li>
                                    <a href="<?= baseUrl ?>Devolucion/formRegister"><i class="fas fa-plus"></i> Agregar nueva</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Devolucion/getAll"><i class="fas fa-list"></i> Ver Todas</a>
                                </li>
                                <li>
                                    <a href="<?= baseUrl ?>Paquete/devolucionPorEmpleado"><i class="fas fa-user-tie"></i> Devolución por empleado</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-file-alt"></i> Facturas</a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-plus"></i> Agregar nuevo</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-list"></i> Ver Todos</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside> 
            <div class="contenido">

            