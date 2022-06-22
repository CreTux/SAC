<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SAC</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/armonizacion_contable/libs/css/style.css" />
</head>

<body>
    <figure>
        <img src="/armonizacion_contable/libs/images/Logo_CDMX.png" alt="Logo CDMX" class="logocdmx" />
        <img src="/armonizacion_contable/libs/images/Logo_Dependencia.png" alt="Logo CAPREPA" class="logocdmx">
    </figure>
    <section class="title_index">
        <h1>Sistema de Armonizacion Contable</h1>
    </section>
    <main class="loging-form">

        <p>Iniciar Sesión</p>

        <form method="post" action="">

        <?php
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
        ?>    
            <div class="data">
                <label for="usser">Usuario</label>
                <input type="text" name="login_usuario" id="usser" require>
                <span class="bar"></span>

            </div>
            <div class="data">
                <label for="passwd">Contraseña</label>
                <input type="password" name="password_usuario" id="passwd" require>
                <span class="bar"></span>

            </div>
            <div class="submit">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </main>
</body>

</html>