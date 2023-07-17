<?php 
declare (strict_types = 1);
include 'includes/header.php';
// ENCAPSULACIÓN 

class Producto{    
    // Public = se puede acceder y modificar en cualquer lugar (clase y objeto)
    // Protected = Se puede acceder y modificar unicamente en la clase
    // Private = solo miembros de la misma clase pueden acceder a el


    // Constructor es una funcion que se va a llamar de inmediato una vez que se crea una nueva instancia
    public function __construct(protected string $nombre, public int $precio, public bool $disponible) // definir atributos
    {
        //$this->nombre = $nombre;  // this se refiere al objeto que estas creando
        //$this->precio = $precio; 
        //$this->disponible = $disponible; 
    }

    public function mostrarProducto(){ // definir  metodo
        echo "El producto es: " . $this->nombre . " y su precio es: " . $this->precio; 
    }

    public function getNombre() : string{ // esto retorna un string
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

// Crear instancias agregando algunos valores
$producto = new Producto('tablet', 200, true);
//$producto->mostrarProducto();  // un objeto utiliza la sintasis de flecha

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";
include 'includes/footer.php';