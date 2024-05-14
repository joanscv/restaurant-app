<aside class="dashboard__sidebar">

    <a href="/dashboard/inicio" class="dashboard__enlace <?php echo is_selected('/dashboard/inicio') ? 'dashboard__enlace--actual' : '' ?>">
        <i class="fa-solid fa-house"></i>
        Inicio
    </a>
    <a href="/dashboard/restaurante" class="dashboard__enlace <?php echo is_selected('/dashboard/restaurante') ? 'dashboard__enlace--actual' : '' ?>">
        <i class="fa-solid fa-utensils"></i>
        Restaurante
    </a>
    <a href="/dashboard/bar" class="dashboard__enlace <?php echo is_selected('/dashboard/bar') ? 'dashboard__enlace--actual' : '' ?>">
    <i class="fa-solid fa-beer-mug-empty"></i>
        Bar
    </a>
    <a href="/dashboard/hospedaje" class="dashboard__enlace <?php echo is_selected('/dashboard/hotel') ? 'dashboard__enlace--actual' : '' ?>">
        <i class="fa-solid fa-bed"></i>
        Hospedaje
    </a>
    <a href="/dashboard/parking" class="dashboard__enlace <?php echo is_selected('/dashboard/parking') ? 'dashboard__enlace--actual' : '' ?>">
        <i class="fa-solid fa-square-parking"></i>
        Parqueadero
    </a>

</aside>