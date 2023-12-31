<?php 
declare (strict_types = 1);
include 'includes/header.php';

abstract class Transporte{ // CLASE DISEÑADA PARA SER HEREDADA POR OTROS CLASES
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

class Bicicleta extends Transporte { // Hereda de la clase transporte
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y no gasta gasolina ";

    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)        
    {   
        
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}




$auto = new Automovil(4, 4, 'Manual'); 
$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();

echo "<hr>";

echo $auto->getInfo();
echo $auto->getTransmision();



include 'includes/footer.php';