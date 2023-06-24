<?php if (isset($marca) && is_object($marca)): ?>
    <h1>Editar marca <?= $marca->getMarca() ?></h1>
    <?php $url_action = BASE_URL."marca/save&id=".$marca->getCodmarca(); ?>
<?php else: ?>
    <h1>Crear nueva marca</h1>
    <?php $url_action = BASE_URL."marca/save"; ?>
<?php endif; ?>

<div class="table-small">
    <form action="<?= $url_action ?>" method="POST">
        <label for="marca">Marca</label>
        <input type="text" name="marca" 
               value="<?=isset($marca) && is_object($marca) ? $marca->getMarca():'';?>"
               autocomplete="off" required/>
        <button name="submit" onclick="submit">
            <i class="far fa-save guardar"></i> Guardar
        </button>
</div>