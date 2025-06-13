<?php

// Verificar si el HTTP es de metodo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    //Array asociativo
    $visita = [
        'nombre' => $_POST ['nombre'],
        'apellido' => $_POST ['apellido'],
        'cedula' => $_POST ['cedula'],
        'edad' => $_POST ['edad'],
        'motivo' => $_POST ['motivo'],
        'fecha' => date('Y-m-d H:i:s'),
    ];

// Donde se guardaran los datos
$archivo = 'visitas.json';

// Comprueba si el archivo existe, si no existe, inicializa un array vacio
$visitas = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

// si visitas esta vacio, visita sera el primer contenido
$visitas[] = $visita; 

// Guardar los datos actualizados de visitas de nuevo en el archivo de visitas.json
file_put_contents($archivo, json_encode($visitas, JSON_PRETTY_PRINT));

header('Location: index.php');
exit;

}

?>