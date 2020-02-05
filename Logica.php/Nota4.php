<?php 
require_once 'Promedio.php';

class Nota4 extends Promedio{
    
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


    public function calcularNota4(){
        return($this->getNota4()*0.10);
           

    }
   
}


?>