<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SAC</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <form method="post" action="" id="formulario">

        <?php
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
        ?>    
            <!-- Grupo usuario -->
            <div class="formulario__grupo" id="grupo__usuario">
                <label for="usuario" class="formulario__label">Usuario</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="usuario" id="usuario">
                    <i class="formulario__validacion-estado fa fa-times-circle"></i>
                    <span class="bar"></span>
                </div>
                
            </div>

            <!-- Grupo contraseña -->

            <div class="formulario__grupo" id="grupo__password">
                <label for="password" class="formulario__label">Contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="password" id="password">
                    <i class="formulario__validacion-estado fa fa-times-circle"></i>
                    <span class="bar"></span>
                </div>
                
            </div>
            <div class="submit">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </main>

    <script src="/armonizacion_contable/libs/js/functions.js"></script>
</body>

</html>