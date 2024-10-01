<?php

 class operandos{
    private $num1;
    private $num2;

    public function setNum1($num1){
        $this->num1=$num1;
    }

    public function getNum1(){
        return $this->num1;
    }

    public function setNum2($num2){
        $this->num2=$num2;
    }

    public function getNum2(){
        return $this->num2;
    }


 }

 class operaciones{

    public $num1;
    public $num2;
    public $sumar;
    public $restar;
    public $multiplicar;
    public $dividir;

    public function sumar($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;

        $this->sumar=$num1 + $num2;
        return $this->sumar;
    }

    public function restar($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;

        $this->restar=$num1 - $num2;
        return $this->restar;
    }

    public function multiplicar($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;

        $this->multiplicar=$num1 * $num2;
        return $this->multiplicar;
    }

    public function dividir($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2;

        $this->dividir=$num1 / $num2;
        return $this->dividir;
    }


        
 }
 

?>