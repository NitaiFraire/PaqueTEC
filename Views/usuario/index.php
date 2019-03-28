<?php 
    require_once 'Config/parameters.php';
    require_once 'Views/usuario/header.php';
?>

<body>
    <header class="header">
        <div class="barra bg-success">
            <div class="container">
                <nav class="navbar bg-transparent navbar-dark navbar-expand-md">
                    <a href="#" class="navbar-brand"><i class="fas fa-truck-loading"></i>PaqueTEC</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuPrincipal"
                        aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar Navegacion">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuPrincipal">
                        <ul class="navbar-nav w-100 justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=baseUrl?>Empleado/formLogIn">LogIn</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <?php require_once 'Views/usuario/slide.php'; ?>
    </header>
    <section class="container mt-5 text-center servicios">
<?php require_once 'Views/layout/footerIndex.php'; ?>