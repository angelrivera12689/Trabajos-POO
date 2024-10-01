

<?php

   class lado {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
   }
   public function setLado($lado) {
    $this->lado= $lado;
   }

   public function  getLado(){
    return $this->lado;
   }
}

?>