<?php
    class nomina{
        private $valorDia;
        private $diasTrabajados;
        public $totalSalario;
        public $transporte;
        public $pagoSalud;
        public $pagoPension;
        public $deducible;
        public $arl;
        public $pagoTotal;


        public function __construct(trabajo $valorDia, trabajo $diasTrabajados){
            $this->valorDia=$valorDia;
            $this->diasTrabajados=$diasTrabajados;
        }

        public function salario(){
            $this->totalSalario=$this->valorDia->getvalor()*$this->diasTrabajados->getvalor();
            return $this->totalSalario;
        }

        public function transportes(){
            $salariominimo= 1300000;
            $salariotrans=$this->totalSalario;
            if ($salariotrans<=2*$salariominimo) {
                return  $this->transporte=114000;
            } else {
                return  $this->transporte=0;
            }
        }

        public function salud(){
            $this ->pagoSalud=$this->totalSalario*0.12;
            return $this -> pagoSalud;
        }

        public function pension(){
            $this ->pagoPension=$this->totalSalario*0.16;
            return $this -> pagoPension;
        }

        public function deducibles(){
            $this->deducible = $this->pagoPension+ $this->pagoSalud;
            return $this->deducible;
        }

        public function arls(){
            $this->arl=$this->totalSalario*0.052;
            return $this->arl;
        }

        public function totalPagar(){
            $this->pagoTotal = $this->totalSalario+$this->transporte-$this->deducible;
            return $this->pagoTotal;
        }


    }
?>