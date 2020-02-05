<?php 
require_once 'Promedio.php';

class Nota1 extends Promedio{
    
    public function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor='__construct'.$numero_parametros;
        
        if(method_exists($this,$funcion_constructor)){
            call_user_func_array(array($this,$funcion_constructor),$parametros);

        }

    }
    public function __construct2($n1, $n2,$n3,$n4,$n5,$t){
        parent::__construct2($n1, $n2,$n3,$n4,$n5,$t);
    }


    public function calcularNota1(){
        return($this->getNota1()*0.20);
           

    }
   
}


?>