<option selected="selected">Selecciona una colonia</option>
<?php while ($colonia = $colonias->fetch_object()) : ?>
    <option value="<?= $colonia->idColonia ?>">
        <?= $colonia->nombreColonia ?>
    </option>
<?php endwhile; ?>