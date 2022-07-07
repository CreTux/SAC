<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/db.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/usuario.php');
//include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/sesion_usuario.php');
  
$conexion_db    = new DB();
//$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="/armonizacion_contable/libs/css/style2.css" as="style" />
    <link rel="preload" href="/armonizacion_contable/libs/css/normalize.css" as="style" />
    <link rel="stylesheet" href="/armonizacion_contable/libs/css/normalize.css" />
    <link rel="stylesheet" href="/armonizacion_contable/libs/css/style2.css" />
    <title>SAC</title>
</head>

<body>
    <header class="cabecera">
        <div class="cabecera__superior">
            <div class="logo__cdmx">
                <img src="/armonizacion_contable/libs/images/Logo_CDMX.png" alt="">
            </div>
            <div class="logo__caprepa">
                <img src="/armonizacion_contable/libs/images/Logo_Dependencia.png" alt="">
            </div>
            <div class="cabecera__contenido">
                <p>Bienvenido "USUARIO"</p>
                <a href="#">Cerrar Sesión</a>
            </div>
        </div>
        <div class="navegacion__principal">
            <nav>
                <ul>
                    <li><a href="/armonizacion_contable/views/home.php">Inicio</a>
                    </li>
                    <li><a href="#">Recursos Materiales</a>
                        <ul>
                            <li><a href="/armonizacion_contable/views/rm_registro.php">Resgistro Requisiciones</a></li>
                            <li><a href="#">Inventario</a></li>
                            <li><a href="/armonizacion_contable/views/rm_consulta.php">Consulta</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Recursos Humanos</a></li>
                    <li><a href="#">Presupuesto</a>
                        <ul>
                            <li><a href="/armonizacion_contable/views/egreso_registro.php">Egreso Registro</a></li>
                            <li><a href="#">Egreso Consulta</a></li>
                            <li><a href="#">Comprometido Registro</a></li>
                            <li><a href="#">Comprometido Consulta</a></li>
                            <li><a href="#">Ingresos Registro</a></li>
                            <li><a href="#">Reportes Presupuesto</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contabilidad</a></li>
                    <li><a href="#">Tesoreria</a></li>
                    <li><a href="#">Reportes</a></li>
                </ul>
            </nav>
        </div>
        </div>
    </header>