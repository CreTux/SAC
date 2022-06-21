<?php        
    $id_session = session_id();
    date_default_timezone_set("America/Mexico_City");
    $fecha_actual = date('Y-m-d H:m:s');
    include_once ('includes/funciones.php');    
    
    if(isset($_POST['usuario']) || isset($_POST['password'])){		      
      $_SESSION['usuario'] = isset (($_POST['usuario'])) ? ($_POST['usuario']) : null;
		  $_SESSION['password'] = isset ($_POST['password']) ? $_POST['password'] : null;      
      $usuario =  $_SESSION['usuario']; 
		  $password = $_SESSION['password'];              
	  } 
        
        
    //Verificamos que la cuenta del usuario este Vigente 
    
    $conexionDb = conecta_db();    
    $usuVigente = pg_query($conexionDb, "SELECT * FROM usuarios 
                                         WHERE login_usuario    = '$usuario' 
                                         AND password_usuario   = '$password' 
                                         AND id_area_usuario    = 9 
                                         AND id_perfil_usuario  = 1  
                                         AND id_estatus_usuario = 1");    
                                      
        
    $res_usuVigente = pg_num_rows($usuVigente);    
    if($res_usuVigente == 1){       
        
        $datos_Usu = pg_fetch_array($usuVigente);    
        $_SESSION['id_usuario'] = $datos_Usu[0];
        $id_usuario = $_SESSION['id_usuario'];        
        //Iniciar sesion activa 
        $sesion_activaUsu = pg_query($conexionDb, "INSERT INTO sesion_activa (sesion_cadena, sesion_id_usuario, inicio_sesion) VALUES ('$id_session', 1, current_timestamp)");             
        header('Location: /armonizacion_contable/home.php');
    }else{
        header('Location: /armonizacion_contable/index.php');
    }
        
?>