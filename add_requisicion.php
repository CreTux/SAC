<?php
    //$id_usuario = $_SESSION['id_usuario'];
    include_once ('includes/funciones.php'); 
    
    $folio_sol_req      = $_POST['folio_sol_req'];
    echo '<br/>';
    echo 'FOLIO SOLICITANTE:'.'  '.$folio_sol_req;
    echo '<br/>';
    
    $folio_ad_req      = $_POST['folio_ad_req'];
    echo '<br/>';
    echo 'FOLIO ADQUISICIONES:'.' '.$folio_ad_req;
    echo '<br/>';
    
    $fecha_req          = $_POST['fecha_req'];
    echo '<br/>';
    echo 'FECHA:'.''.$fecha_req;
    echo '<br/>';
    
    $descripcion_req    = $_POST['descripcion_req'];
    echo '<br/>';
    echo 'DESCRIPCIÓN DE BIENES Y/O SERVICIOS:'.' '.$descripcion_req;
    echo '<br/>';
    
    $cantidad_req       = $_POST['cantidad_req'];
    echo '<br/>';
    echo 'CANTIDAD REQUERIDA:'.' '.$cantidad_req;
    echo '<br/>';
    
    $costo_aprox_req    = $_POST['costo_aprox_req'];
    echo '<br/>';
    echo 'COSTO APROXIMADO:'.' '. $costo_aprox_req;
    echo '<br/>';
    
    $justificacion_req  = $_POST['justificacion_req'];
    echo '<br/>';
    echo 'JUSTIFIACION Y USO DE LOS BIENES Y/O SERVICIOS:'.' '.$justificacion_req;
    echo '<br/>';
        
    $surtimiento_req    = $_POST['surtimiento_req'];
    echo '<br/>';
    echo 'SURTIMIENTO:'.' '.$surtimiento_req;
    echo '<br/>';
    
    $solicita_req       = 6;
    echo '<br/>';
    echo 'SOLICITA:'.' '.$solicita_req;
    echo '<br/>';
    
    $cargo_sol_req      = 6;
    echo '<br/>';
    echo 'CARGO SOLICITA:'.' '.$cargo_sol_req;
    echo '<br/>';
    
    $revisa_req         = 9;
    echo '<br/>';
    echo 'REVISA:'.' '.$revisa_req;
    echo '<br/>';
    
    $cargo_rev_req      = 2;
    echo '<br/>';
    echo 'CARGO REVISA:'.' '.$cargo_rev_req;
    echo '<br/>';
        
    $autoriza_req       = 10;
    echo '<br/>';
    echo 'AUTORIZA:'.' '.$autoriza_req;
    echo '<br/>';
    
    $cargo_aut_req      = 2;
    echo '<br/>';
    echo 'CARGO AUTORIZA:'.''.$cargo_aut_req;
    echo '<br/>';
            
    $num_oficio_req     = $_POST['num_oficio_req'];
    echo '<br/>';    
    echo 'OFICIO:'.' '.$num_oficio_req;
    echo '<br/>';
    
    
    $fecha_oficio_req   = $_POST['fecha_oficio_req'];
    echo '<br/>';
    echo 'FECHA OFICIO:'.' '.$fecha_oficio_req;
    echo '<br/>';
    
    $id_usuario_req     = 1;    
    echo '<br/>';
    echo 'USUARIO:'.' '.$id_usuario_req;
    echo '<br/>';    
    
    
    $umedida_req        = $_POST['umedida_req'];
    echo '<br/>';
    echo 'UNIDAD DE MEDIDA:'.''.$umedida_req;
    echo '<br/>';
    
    
    $ppresupuestal_req      = 2;
    echo '<br/>';
    echo  'PARTIDA PRESUPUESTAL:'.''.$ppresupuestal_req;
    echo '<br/>';
    
    $estatus_req = 1;

    $conexionDb = conecta_db();    
    
   $insert_requisicion = pg_query($conexionDb, 
                           "INSERT INTO requisiciones
                                        (
                                         folio_sol_req,
                                         folio_adq_req,
                                         fecha_req,
                                         descripcion_req,
                                         cantidad_req,
                                         costo_aprox_req,
                                         justificacion_req,
                                         surtimiento_req,
                                         solicita_req,
                                         cargo_sol_req,
                                         revisa_req,                                         
                                         cargo_rev_req,
                                         autoriza_req,
                                         cargo_aut_req,
                                         num_oficio_req,
                                         fecha_oficio_req,
                                         id_usuario_req,                                         
                                         umedida_req,
                                         ppresupuestal_req,
                                         estatus_req,
                                         fecha_reg_req
                                          
                                        ) 
                                        VALUES
                                        (
                                         '$folio_sol_req',
                                         '$folio_ad_req',
                                         '$fecha_req',
                                         '$descripcion_req',
                                         '$cantidad_req',
                                         '$costo_aprox_req',
                                         '$justificacion_req',                  
                                         '$surtimiento_req',
                                         '$solicita_req',
                                         '$cargo_sol_req',
                                         '$revisa_req',
                                         '$cargo_rev_req',
                                         '$autoriza_req',
                                         '$cargo_aut_req',
                                         '$num_oficio_req',
                                         '$fecha_oficio_req',
                                         '$id_usuario_req',                                          
                                         '$umedida_req',
                                         '$ppresupuestal_req',
                                         '$estatus_req',
                                          current_time                                                                                   
                                         )");


?>