<?php if (isset($cate) && is_object($cate)): ?>
    <h1>Editar categoría <?= $cate->getCategoria() ?></h1>
    <?php $url_action = BASE_URL."categoria/save&id=".$cate->getCodcate(); ?>
<?php else: ?>
    <h1>Crear nueva categoría</h1>
    <?php $url_action = BASE_URL."categoria/save"; ?>
<?php endif; ?>

<div class="table-small">
    <form action="<?= $url_action ?>" method="POST">
        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" 
               value="<?=isset($cate) && is_object($cate) ? $cate->getCategoria():'';?>"
               autocomplete="off" required/>
        <button name="submit" onclick="submit">
            <i class="far fa-save guardar"></i> Guardar
        </button>
    </form>
</div>
