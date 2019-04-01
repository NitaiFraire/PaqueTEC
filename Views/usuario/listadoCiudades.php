<option selected="selected">Selecciona una ciudad</option>
<?php while ($ciudad = $ciudades->fetch_object()) : ?>
    <option value="<?= $ciudad->idCiudad ?>">
        <?= $ciudad->nombreCiudad ?>
    </option>
<?php endwhile; ?>