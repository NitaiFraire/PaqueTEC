<?php if(isset($_SESSION['identified'])): ?>
    <?php require_once 'Views/layout/header.php'?>
<?php else: ?>
    <?php require_once 'Views/layout/headerError.php'?>
<?php endif; ?>
<div class="container cError">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <h1>Ups... La dirección que buscas no existe</h1>
            <i class="fas fa-truck"></i><i class="fas fa-times-circle"></i>
        </div>
    </div>
</div>
<?php require_once 'Views/layout/footer.php'?>