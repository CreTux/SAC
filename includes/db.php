<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
 
    public function __construct(){
        $this->host        = '10.18.20.105';
        $this->db          = 'armonizacion_contable';
        $this->usuario_db  = 'oromero';
        $this->password_db = 'yandex1730';        
    }

     function conecta_db(){
    
        try{
            
            $conexion = "pgsql: host = $this->host; port=5432; dbname = $this->db; user=$this->usuario_db; password = $this->password_db";
            
            $opciones = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($conexion, $this->user, $this->password, $opciones);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error de conexion: ' . $e->getMessage());
        }   
    }
}
?>