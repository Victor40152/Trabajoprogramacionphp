<?php 

class Promedio{

private $nota1;
private $nota2;
private $nota3;
private $nota4;
private $nota5;

public function __construct(){
    $parametros = func_get_args();
    $numero_parametros = func_num_args();
    $funcion_constructor='__construct'.$numero_parametros;
    
    if(method_exists($this,$funcion_constructor)){
        call_user_func_array(array($this,$funcion_constructor),$parametros);

    }
public function __construct0(){
    $this ->$nota1 =0;
    $this ->$nota2=0;
    $this ->$nota3=0;
    $this ->$nota4=0;
    $this ->$nota5=0;

}
public function __construct2($n1, $n2,$n3,$n4,$n5,$t){
    parent::__construct2($n1, $n2,$n3,$n4,$n5,$t);
}
public function setNota1($valor){

    $this->nota1=$valor;
}

protected function getNota1(){

    return $this->nota1;
}

public function setNota2($valor){

    $this->nota2=$valor;
}
protected function getNota2(){

    return $this->nota2;
}
public function setNota3($valor){

    $this->nota3=$valor;
}

protected function getNota3(){

    return $this->nota3;
}

public function setNota4($valor){

    $this->nota4=$valor;
}
protected function getNota4(){

    return $this->nota4;
}
public function setNota5($valor){

    $this->nota5=$valor;
}
protected function getNota5(){

    return $this->nota5;

}

}


}



?>