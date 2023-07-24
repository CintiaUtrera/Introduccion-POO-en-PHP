<?php include 'includes/header.php';

// Incluir las otras clases
//require "clases/Clientes.php";
//require "clases/Detalles.php";



function mi_autoload($clase) { // autoload va a buscar las clases 
    
    require __DIR__ . '/clases/'  . $clase . '.php';
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';