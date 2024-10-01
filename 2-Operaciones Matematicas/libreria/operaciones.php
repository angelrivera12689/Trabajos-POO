<?php

class Operaciones {
    private $num1;
    private $num2;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    public function __construct(Numero $num1, Numero $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar() {
        $this->suma = $this->num1->getValor() + $this->num2->getValor();
        return $this->suma;
    }

    public function resta() {
        $this->resta = $this->num1->getValor() - $this->num2->getValor();
        return $this->resta;
    }

    public function multiplicacion() {
        $this->multiplicacion = $this->num1->getValor() * $this->num2->getValor();
        return $this->multiplicacion;
    }

    public function division() {
        $this->division = $this->num1->getValor() / $this->num2->getValor();
        return $this->division;
    }
}

?>
