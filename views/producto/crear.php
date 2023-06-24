<?php if(isset($prod) && is_object($prod)): ?>
	<h1>Editar producto <?=$prod->getNombre() ?></h1>
	<?php $url_action = BASE_URL."producto/save&id=".$prod->getCodproducto() ; ?>
	
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = BASE_URL."producto/save"; ?>
<?php endif; ?>

<div class="table-small">
    <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" 
               value="<?=isset($prod) && is_object($prod) ? $prod->getNombre() : ''; ?>"
               autocomplete="off" required/>
        <label for="precio">Precio</label>
        <input type="text" name="precio" 
               value="<?=isset($prod) && is_object($prod) ? $prod->getPrecio() : ''; ?>"
               autocomplete="off" required/>
        <label for="existencia">Existencia</label>
        <input type="text" name="existencia" 
               value="<?=isset($prod) && is_object($prod) ? $prod->getExistencia() : ''; ?>"
               autocomplete="off" required/>
        <label for="categoria">Categoria</label>
        <select name="categoria" required="required">
            <option value="">-- Seleccione una categoría --</option>
            <?php while ($cat = $categorias->fetch_object()): ?>
                <option value="<?= $cat->codcate; ?>" <?=isset($prod) && is_object($prod) && $cat->codcate == $prod->getCodcate() ? 'selected' : ''; ?>>
                    <?= $cat->categoria; ?>
                </option>
            <?php endwhile; ?>
        </select>
        <label for="marca">Marca</label>
        <select name="marca" required="required">
            <option value="">-- Seleccione una marca --</option>
            <?php while ($marca = $marcas->fetch_object()): ?>
                <option value="<?= $marca->codmarca; ?>" <?=isset($prod) && is_object($prod) && $marca->codmarca == $prod->getCodmarca() ? 'selected' : ''; ?>>    
                    <?= $marca->marca ?>
                </option>
            <?php endwhile; ?>
        </select>
    	<label for="imagen">Imagen</label>
        <?php if(isset($prod) && is_object($prod) && !empty($prod->getImagen())): ?>
		<img src="<?=BASE_URL?>uploads/<?=$prod->getImagen()?>" class="thumb"/> 
        <?php endif; ?>
        <input type="file" name="imagen" accept="image/*" />
        <button name="submit" onclick="submit">
            <i class="far fa-save guardar"></i> Guardar
        </button>
    </form>
</div>
