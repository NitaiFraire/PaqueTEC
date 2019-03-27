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
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar Navegacion">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuPrincipal">
                        <ul class="navbar-nav w-100 justify-content-end">
                            <li class="nav-item">
                                <?php require_once 'Views/usuario/formLogIn.php'; ?>
                            </li>
                            <li class="nav-item">
                                <?php require_once 'Views/usuario/formRegister.php'; ?>
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
    <div class="container mt-4">
        <div class="row jutify-content-center">
            <div class="col-md-12">
                <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'success'): ?>
                    <h2 class="alert alert-success" role="alert">Empleado creado correctamente<i class="fas fa-check-circle ml-3"></i></h2>
                <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'):?>
                    <h2 class="alert alert-danger" role="alert">Error al crear empleado<i class="fas fa-times ml-3"></i></h2>
                <?php endif; ?>
            </div>
                <?php Utils::deleteSession('register')?>    
        </div>
    </div>
    <?php require_once 'Views/layout/footerIndex.php'; ?> 