<option selected="selected">Selecciona un estado</option>
<?php while ($estado = $estados->fetch_object()) : ?>
    <option value="<?= $estado->idEstado ?>">
        <?= $estado->nombreEstado ?>
    </option>
<?php endwhile; ?>