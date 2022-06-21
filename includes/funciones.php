<?php
    $errores = array();    
        
    function conecta_db(){
    $con_db = pg_connect('host=10.18.20.105 dbname=armonizacion_contable user=oromero password=yandex1730');
      return $con_db;
    }
    
    function campos_vacios($var){
        global $errores;
        foreach ($var as $campo){
          $val = limpiar_cadena($_POST[$campo]);
            if(isset($val) && $val==''){
            $errors = $campo ." No puede estar en blanco.";         
            return $errores;            
            }
        }      
      }

      function limpiar_cadena($cadena){
        $cadena = nl2br($cadena);
        $cadena = htmlspecialchars(strip_tags($cadena, ENT_QUOTES));
      return $cadena;
      }      

?>