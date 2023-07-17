<?php 
declare (strict_types = 1);
include 'includes/header.php';

// MÉTODOS ESTÁTICOS

class Producto{    
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceholder= $imagen;
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto(){
        echo "obteniendo datos de los productos...";
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
$producto = new Producto('tablet', 200, true, '');
//$producto->mostrarProducto();  // un objeto utiliza la sintasis de flecha

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

include 'includes/footer.php';