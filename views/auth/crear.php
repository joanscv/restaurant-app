<main class="crear">
    <h1 class="crear__heading--main">Las Delicias de Mamá</h1>
    <p class="crear__text">Servicio de Restaurante, Hospedaje y Parqueadero</p>
    <h3 class="crear__heading--secondary">Crea tu Cuenta</h3>
    <?php include_once __DIR__ . "/../templates/alertas.php" ?>

    <form action="/crear" method="post" class="formulario">

      <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input 
            type="text" 
            id="nombre" 
            name="nombre" 
            placeholder="Tu Nombre" 
            class="formulario__input">
      </div>

      <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input 
            type="text" 
            id="apellido" 
            name="apellido" 
            placeholder="Tu Apellido" 
            class="formulario__input">
      </div>

      <div class="formulario__campo">
        <label for="username" class="formulario__label">Username</label>
        <input 
            type="text" 
            id="username" 
            name="username" 
            placeholder="Tu Username (debe empezar con @)" 
            class="formulario__input">
      </div>

      <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Tu Password" 
            class="formulario__input">
      </div>

      <div class="formulario__campo">
        <label for="password2" class="formulario__label">Repite tu Password</label>
        <input 
            type="password" 
            id="password2" 
            name="password2" 
            placeholder="Escribe tu Password nuevamente" 
            class="formulario__input">
      </div>
      <input type="submit" class="crear__submit" value="Crea tu cuenta">
    </form>

    <div class="acciones">
      <a href="/" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
      <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>