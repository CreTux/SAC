<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/db.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/usuario.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/sesion_usuario.php');

$conexion_db    = new DB();
$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();


//si las variables $_SESSION no estan vacias entonces  obtenemos los datos del usuario 
//actual y redirecciona al home
if(isset($_SESSION['login_usuario'])){
    $nombre_usuario->estableceUsuario($sesion_usuario->obtenUsuarioActual()); 
    //include_once './views/home.php';
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/home.php');
}
  //Si  las variables de $_POST no estan vacias, entonces se guardan en las variables usuaForm y passForm.
else if(isset($_POST['login_usuario']) && isset($_POST['password_usuario'])){
    $usuaForm = $_POST['login_usuario'];
    $passForm = $_POST['password_usuario'];

    //Si el usuario existe en la base de datos, entonces:
    if($nombre_usuario->buscaUsuario($usuaForm, $passForm)){
        //Establecemos el usuario actual en la varable de sesion.
      $sesion_usuario->estableceUsuarioActual($usuaForm); 
        //Obtemos los datos del usuario de la base de datos como el id, nombre y login.
      $nombre_usuario->estableceUsuario($usuaForm); 
        //Obtenemos el id de sesion del usuario. y lo guartdamos en una variable.
      $idSesion_usuario = $sesion_usuario->obtenIdSession(); 
        //Obtenemos el id del usuario y lo guardamos en una variable.
      $id_usuario = $nombre_usuario->obtenID();
        //Obtenemos la hora de inicio de sesion y la guardamos en una variable.
      $horaComienzo_Sesion = $sesion_usuario->horaInicioSesion();

    //Conexion a la base de datos para guardar la sesion 
      $conexion_db->conecta_db();
      $conexionDb = $conexion_db->conecta_db();        
        
      //Busca en la base si hay una sesion activa en la base de datos
      $selectSesion_activa = $conexionDb->prepare("SELECT * FROM sesion_activa WHERE sesion_id_usuario = $id_usuario");
      $selectSesion_activa->execute();

      //Contamos cuantas sesiones hay activas existen en la base de datos y se guarda en una variable.
      $cuentaSesion = $selectSesion_activa->rowCount();

        //Si no hay sessiones activas en la base de datos, entonces se guarda la sesion actual en la base de datos
        // y se redirecciona al home
        if($cuentaSesion == 0){
          $insertSesion_activa = $conexionDb->exec("INSERT INTO sesion_activa (sesion_cadena, sesion_id_usuario, inicio_sesion ) VALUES ('$idSesion_usuario', '$id_usuario', '$horaComienzo_Sesion')");
            $enLinea = 'En línea';
            //include_once './views/home.php'; 
            include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/home.php');                             
        }
        //Si existe una sesion activa, obtenemos la hora de inicio de sesion y la guardamos en una variable.     
        else if($cuentaSesion > 0){          
          $enLinea = 'En línea';
          foreach ($selectSesion_activa as $horaSesion_actual){              
              $horaSesion_activa  = $horaSesion_actual['inicio_sesion'];              
              //convertimos la hora y fecha a un formato de UNIX
              $segundos_HoraInicio = (strtotime( $horaSesion_activa));                              
            }
            //calculamos el tiempo de Inicio de sesion en tabla menos la hora actual  
            $hora_Actual = date('Y-n-j H:i:s');          
            $segundos_HoraActual = (strtotime($hora_Actual));
            $tiempo_EnSesion = $segundos_HoraActual-$segundos_HoraInicio;          
           // Si el tiempo de sesion es mayor a 60 segundos, entonces se borrra la sesion activa y se redirecciona al loging
          if($tiempo_EnSesion > 60){            
            $borraSesion_activa = $conexionDb->prepare("DELETE FROM sesion_activa WHERE sesion_id_usuario = $id_usuario");          
            $borraSesion_activa->execute();
            $sesion_usuario->closeSession();            
            //include_once './views/login.php';    
            include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/login.php');    
          }
          else if($tiempo_EnSesion <= 60){
            $enLinea = 'En línea';
            //include_once './views/home.php';
            include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/home.php');
          }             
        }    
    } 
    else{
    //echo "nombre de usuario y/o password incorrecto";
    $errorLogin = "Nombre de usuario y/o password es incorrecto";
    //include_once './views/login.php';
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/login.php');
    }
}else{
    //echo "Login";
    //include_once './views/login.php';
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/login.php');
}


?>