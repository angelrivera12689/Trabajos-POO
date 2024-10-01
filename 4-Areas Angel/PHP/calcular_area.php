

<?php

 class Calcular_area{
    private $base;
    private $altura;
    public $area;

    public function __construct(lado $base, lado  $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area_cuadrado(){
        $this -> area = $this->base->getLado() * $this->altura->getLado();
        return $this -> area;
    }

    public function area_triangulo(){
        $this -> area = $this->base->getLado() * $this->altura->getLado() / 2;
        return $this -> area;
    }


    public function area_rectangulo(){
        $this -> area = $this->base->getLado() * $this->altura->getLado();
        return $this -> area;
    }


 }

?>