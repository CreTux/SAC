<?php
  include_once 'header.php';
?>

<figure>
    <img src="libs/images/Logo_CDMX.png" alt="Logo CDMX" class="logocdmx" />
    <img src="libs/images/Logo_Dependencia.png" alt="Logo CAPREPA" class="logocdmx">
</figure>
<section class="title_index">
    <h1>Sistema de Armonizacion Contable</h1>
</section>
<main class="loging-form">
    <p class="inicio_sesion">Iniciar Sesión</p>
    
    <form method="post" action="">
     <?php
       if(isset($errorLogin)){
         echo $errorLogin;
       }
     ?>    
        <div class="login">
            <input type="text" name="login_usuario" require>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Usuario</label>
        </div>
        <div class="login">
            <input type="password" name="password_usuario"  require>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Contraseña</label>
        </div>
        <div class="center-item">
            <input type="submit" value="Entrar">
        </div>

    </form>
</main>
 