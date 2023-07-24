<?php include 'includes/header.php';

// Incluir las otras clases
//require 'clases/Clientes.php';
//require 'clases/Detalles.php';


//NAMESPACE : es como darle un subnombre a la clase
// NO se  puede tener dos clases que se llamen iguales

use App\Clientes;
use App\Detalles;

function mi_autoload($clase) { // autoload va a buscar las clases 
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/'  . $partes[1] . '.php';
}

spl_autoload_register('mi_autoload');



$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';