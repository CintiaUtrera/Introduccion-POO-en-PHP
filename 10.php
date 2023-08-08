<?php include 'includes/header.php';


// Conectar a la BD con PDO

$db= new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

$query = "SELECT titulo from propiedades";

$stmt = $db->prepare($query);    // utilizaremos una sentencia preparada

$stmt->execute();

$resultado = $stmt->fetch();

var_dump($resultado);

include 'includes/footer.php';