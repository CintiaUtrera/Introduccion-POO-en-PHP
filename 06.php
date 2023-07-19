<?php
include 'includes/header.php';

interface TransporteInterfaz{
    public function getInfo() : string; // : retorna un string
    public function getRuedas() : int; // : retorna  un entero

}

class Transporte implements TransporteInterfaz {  // implements para agregarle la interfaz
    public function __construct(protected int $ruedas, protected int $capacidad)        
    {   
        
    }
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }
    public function getRuedas() : int {
        return $this->ruedas;
    }
}

include 'includes/footer.php';