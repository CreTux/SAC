<?php
class sesionUsuario{
    
    public function __construct(){
      session_start();                
    }
    
    public function obtenIdSession(){
      return session_id();
    }
    
    public function estableceUsuarioActual($nombre_usuario){
      $_SESSION['nombre_usuario'] = $nombre_usuario;       
    }   

    public function obtenUsuarioActual(){      
      return $_SESSION['nombre_usuario'];
    }  
    
    public function horaInicioSesion(){      
      return $horaInicialSesion = date('Y-n-j H:i:s');    
    }
    
     public function horaActual(){
       //return $horaActualSistema = 
     }       
    
    public function closeSession(){               
        session_unset();
        session_destroy();
    }
}
?>