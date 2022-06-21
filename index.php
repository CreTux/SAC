<?php
include_once 'includes/db.php';
include_once 'includes/usuario.php';
include_once 'includes/sesion_usuario.php';

$conexion_db    = new DB();
$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();

  if(isset($_SESSION['login_usuario'])){
    //Obten el nombre del usuario actualmente firmado   
    $nombre_usuario->estableceUsuario($sesion_usuario->obtenUsuarioActual()); 
    //echo $nombre_usuario;  
    include_once 'vistas/home.php';         
  }
  //De lo contrario si se colocaron el login y el password 
  else if(isset($_POST['login_usuario']) && isset($_POST['password_usuario'])){
  //Guarda los valores de ususuario en las siguientes variables
  $usuaForm = $_POST['login_usuario'];
  $passForm = $_POST['password_usuario'];
    if($nombre_usuario->buscaUsuario($usuaForm, $passForm)){//de "usuario"        
      //Obtenemos el login del usuario actual        
      $sesion_usuario->estableceUsuarioActual($usuaForm); // de "usuario_sesion"        
      //Guardamos en una variable de sesion el login del usuario        
      $nombre_usuario->estableceUsuario($usuaForm); // de "usuario"       
      //Obtenemos la cadena de sesion del usuario        
      $idSesion_usuario = $sesion_usuario->obtenIdSession();  //de "usuario_sesion"        
      //Obtenemos el id del usuario
      $id_usuario = $nombre_usuario->obtenID(); //de "usuario"      
      $horaComienzo_Sesion = $sesion_usuario->horaInicioSesion();        
      //Nos conectamos a la base de datos
      $conexion_db->conecta_db();
      $conexionDb = $conexion_db->conecta_db();        
        
      //Busca en la base si hay una sesion activa en la base de datos
      $selectSesion_activa = $conexionDb->prepare("SELECT * FROM sesion_activa WHERE sesion_id_usuario = $id_usuario");
      $selectSesion_activa->execute();
      $cuentaSesion = $selectSesion_activa->rowCount();       
        //Si no hay sesion activa inserta la cadena de sesion y hora del usuario  
        if($cuentaSesion == 0){
          $insertSesion_activa = $conexionDb->exec("INSERT INTO sesion_activa (sesion_cadena, sesion_id_usuario, inicio_sesion ) VALUES ('$idSesion_usuario', '$id_usuario', '$horaComienzo_Sesion')");
            $enLinea = 'En línea';
            include_once 'vistas/home.php';                              
        }
        //De lo contrario si hya una sesion activa...        
        else if($cuentaSesion > 0){          
          $enLinea = 'En línea';
          foreach ($selectSesion_activa as $horaSesion_actual){              
              $horaSesion_activa  = $horaSesion_actual['inicio_sesion'];              
              //echo 'Hora de Inicio de Sesion en tabla:'.''.$horaSesion_activa;
              //echo '<br/>';
              $segundos_HoraInicio = (strtotime( $horaSesion_activa));                              
        }
        //calculamos el tiempo de Inicio de sesion en tabla menos la hora actual  
        $hora_Actual = date('Y-n-j H:i:s');          
        //echo 'Hola de actual del sistema:'.' '.$hora_Actual;
        $segundos_HoraActual = (strtotime($hora_Actual));
        $tiempo_EnSesion = $segundos_HoraActual-$segundos_HoraInicio;          
        //echo '<br/>';
        //echo 'Segundos transcurridos:'.' '.$tiempo_EnSesion;
          if($tiempo_EnSesion > 60){            
            //echo '<br/>';
            //echo 'Se termino el tiempo de sesion';
            $borraSesion_activa = $conexionDb->prepare("DELETE FROM sesion_activa WHERE sesion_id_usuario = $id_usuario");          
            $borraSesion_activa->execute();
            $sesion_usuario->closeSession();            
            include_once 'vistas/login.php';         
          }
          else if($tiempo_EnSesion <= 60){
            $enLinea = 'En línea';
            include_once 'vistas/rm_registro.php'; //home
          }             
    }    
} 
  else{
  //echo "nombre de usuario y/o password incorrecto";
    $errorLogin = "Nombre de usuario y/o password es incorrecto";
    include_once 'vistas/login.php';
  }
}else{
    //echo "Login";
    include_once 'vistas/login.php';
}


?>