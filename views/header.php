<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/db.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/usuario.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/sesion_usuario.php');
  
$conexion_db    = new DB();
$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC</title>
    <link rel="stylesheet" href="/armonizacion_contable/libs/css/style.css" />
    
</head>

<body>

    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="/armonizacion_contable/libs/images/Logo_CDMX.png" alt="">
                <img src="/armonizacion_contable/libs/images/Logo_Dependencia.png" alt="">
            </div>
            <div class="search">
                <p>Bienvenido</p>
                <p>
                    "Aqui va el nombre del usuario"
                </p>
            </div>
        </div>
        <div class="container__menu">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="/armonizacion_contable/views/home.php">Inicio</a>
                        <ul>
                            <li><a href="#">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                        <li><a href="#">Recursos Materiales</a>
                            <ul>
                                <li><a href="/armonizacion_contable/views/rm_registro.php">Resgistro Requisiciones</a></li>
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