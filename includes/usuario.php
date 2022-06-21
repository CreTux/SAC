<?php

include_once 'db.php';

class Usuario extends DB{

    private $nombre_usuario;
    private $login_usuario;
    private $id_usuario;  
        

    public function buscaUsuario($login, $pass){
        $md5pass = md5($pass);

        $query = $this->conecta_db()->prepare('SELECT * FROM usuarios WHERE login_usuario = :login AND password_usuario = :pass');
        $query->execute(['login' => $login, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function estableceUsuario($login){
        $query = $this->conecta_db()->prepare('SELECT * FROM usuarios WHERE login_usuario = :login');
        $query->execute(['login' => $login]);

        foreach ($query as $usuarioActual){
            $this->id_usuario     = $usuarioActual['id_usuario'];        
            $this->login_usuario  = $usuarioActual['login_usuario']; 
            $this->nombre_usuario = $usuarioActual['nombre_usuario'];           
        }
    }

    public function obtenNombre(){        
        return $this->nombre_usuario;
    }
    
    public function obtenID(){        
        return $this->id_usuario;
    }    
    
    
}

?>
