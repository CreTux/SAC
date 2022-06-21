<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC</title>
    <link rel="stylesheet" href="libs/css/home.css" />
</head>

<body>

    <header>        
        <div class="header__superior">
            <div class="logo">
                <img src="./libs/images/Logo_CDMX.png" alt="">
                <img src="./libs/images/Logo_Dependencia.png" alt="">
            </div>
            <div class="menu">                
                  <p>Bienvenido: <?php echo $nombre_usuario->obtenNombre().' / '.$enLinea; ?></p>                  
                  <p><a href="includes/logout.php">Cerrar sesión</a></p>
                                  
            </div>                        
        </div>
        <div class="container__menu">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="home.php">Inicio</a></li>
                        <li><a href="#">Recursos Materiales</a>
                            <ul>
                                <li><a href="rm_registro.php">Resgistro Requisiciones</a></li>
                                <li><a href="#">Inventario</a></li>
                                <li><a href="#">Consulta</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Recursos Humanos</a></li>
                        <li><a href="#">Presupuesto</a></li>
                        <li><a href="#">Contabilidad</a></li>
                        <li><a href="#">Tesoreria</a></li>
                        <li><a href="#">Reportes</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </header>
    
    
    <figure class="banner__index">
        <img src="./libs/images/LOGO_NUEVO_CAPREPA_TRANSPARENTE.png" alt="">
    </figure>
    

</body>

</html>