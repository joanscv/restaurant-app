<h2 class="dashboard__titulo"><?php echo $titulo; ?></h2>
<div class="dashboard__restaurante-mesas">
    <?php foreach(array_reverse($mesas) as $mesa): ?>
        <a href="/dashboard/restaurante/menu?id=<?php echo $mesa->id; ?>" id="<?php $mesa->id; ?>" class="dashboard__mesa dashboard__mesa-<?php echo is_free($mesa->disponibilidad); ?>">
            <?php echo 'Mesa' . ' ' . $mesa->id; ?>
        </a>
    <?php endforeach; ?>
</div>