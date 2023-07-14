<?php
declare (strict_types = 1);
include 'includes/header.php';
// Definir una clase

class Producto{    
    //public $nombre; // atributos
    //public $precio;  // atributos
    //public $disponible; // atributos


    // Constructor es una funcion que se va a llamar de inmediato una vez que se crea una nueva instancia
    public function __construct(public string $nombre, public int $precio, public bool $disponible) // definir atributos
    {
        //$this->nombre = $nombre;  // this se refiere al objeto que estas creando
        //$this->precio = $precio; 
        //$this->disponible = $disponible; 
    }

    public function mostrarProducto(){ // definir  metodo
        echo "El producto es: " . $this->nombre . " y su precio es: " . $this->precio; 
    }
}

// Crear instancias agregando algunos valores
$producto = new Producto('tablet', 200, true);
$producto->mostrarProducto();  // un objeto utiliza la sintasis de flecha


echo "<pre>";
var_dump($producto);
echo "</pre>";



include 'includes/footer.php';