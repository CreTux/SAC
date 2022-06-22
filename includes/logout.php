<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/db.php');
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/usuario.php');
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/sesion_usuario.php');

    $sesion_usuario = new sesionUsuario();    
    $conexion_db    = new DB();    
    
    $idSesion_usuario = $sesion_usuario->obtenIdSession();   
    
    $conexion_db->conecta_db();
    $conexionDb = $conexion_db->conecta_db();

    $selectSesion_activa = $conexionDb->prepare("SELECT * FROM sesion_activa WHERE sesion_cadena = '$idSesion_usuario'");
    $selectSesion_activa->execute();
    $cuentaSesion = $selectSesion_activa->rowCount();
    if($cuentaSesion > 0){
         $borraSesion_activa = $conexionDb->prepare("DELETE FROM sesion_activa WHERE sesion_cadena = '$idSesion_usuario'");
         $borraSesion_activa->execute();
    $sesion_usuario->closeSession();
    header("location: /armonizacion_contable/index.php");    
    } 
?>
