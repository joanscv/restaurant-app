<main class="login">
  <h1 class="login__heading--main">Las Delicias de Mamá</h1>
  <p class="login__text">Servicio de Restaurante, Hospedaje y Parqueadero</p>
  <h3 class="login__heading--secondary">Iniciar Sesión</h3>
  <?php include_once __DIR__ . "/../templates/alertas.php" ?>
  <form action="/" method="post" class="formulario">

    <div class="formulario__campo">
      <label for="username" class="formulario__label">Username</label>
      <input 
          type="text" 
          id="username" 
          name="username" 
          placeholder="Tu Username" 
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
    <input type="submit" class="login__submit" value="Iniciar Sesión">
  </form>

  <div class="acciones">
    <a href="/crear" class="acciones__enlace">¿Aún no tienes cuenta? Crea una</a>
    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
  </div>
</main>