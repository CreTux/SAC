<?php 
//include_once '\views\header.php';
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/header.php');
$conexion_db    = new DB();
$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();
$conexion_db->conecta_db();
$conexionDb = $conexion_db->conecta_db();
?>
    <main>
        
            <h2>requisición de adquisiciones, arrendamientos y servicios</h2>
           
    <?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/footer.php');
    ?>