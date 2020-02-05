<?php 
require_once 'Promedio.php';

class Nota5 extends Promedio{
    
    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor='__construct'.$numero_parametros;
        
        if(method_exists($this,$funcion_constructor)){
            call_user_func_array(array($this,$funcion_constructor),$parametros);

        }

    }
    ppublic function __construct2($n1, $n2,$n3,$n4,$n5,$t){
        parent::__construct2($n1, $n2,$n3,$n4,$n5,$t);
    }


    public function calcularNota5(){
        return($this->getNota5()*0.33);
           

    }
   
}


?>