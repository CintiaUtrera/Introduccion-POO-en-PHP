<?php

include 'includes/header.php';

// Crear nueva instancia para conectar a la BD con msqli
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');


$query = "SELECT titulo from propiedades";
$stmt = $db->prepare($query);   // prepare es una sentencia preparada

$stmt->execute(); //ejecutamos

$stmt->bind_result($titulo); // retorna una variable llamada titulo

$stmt->fetch(); // asignamos el resultado

var_dump($titulo); // imprime el resultado

include 'includes/footer.php';