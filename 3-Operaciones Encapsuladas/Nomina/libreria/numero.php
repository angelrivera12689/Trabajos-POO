<?php
    class trabajo{
        private $valor;

        public function __construct($valor){
            $this->valor=$valor;
        }

        public function setvalor($valor){
            $this->valor=$valor;
        }

        public function getvalor(){
            return $this->valor;
        }
    }
?>