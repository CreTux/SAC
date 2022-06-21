<?php
    include_once 'sesion_usuario.php';
    include_once 'usuario.php';
    include_once 'db.php';

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
    header("location: ../index.php");    
    } 
?>

    