<h2 class="dashboard__titulo"><?php echo $titulo; ?></h2>
<div class="dashboard__restaurante-mesas">
    <?php foreach(array_reverse($mesas) as $mesa): ?>
        <button id="<?php $mesa->id; ?>" class="dashboard__mesa dashboard__mesa-<?php echo is_free($mesa->disponibilidad); ?>">
            <?php echo 'Mesa' . ' ' . $mesa->id; ?>
        </button>
    <?php endforeach; ?>
</div>