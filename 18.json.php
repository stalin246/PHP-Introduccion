<?php 
// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir un arreglo multidimensional de productos
$productos = [
    [
        "nombre" => "tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "televisor",
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "monitor",
        "precio" => 200,
        "disponible" => false
    ]
];

// Mostrar la estructura y contenido del arreglo original
echo "<pre>";
var_dump($productos);

// Convertir el arreglo de productos a formato JSON
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

// Decodificar la cadena JSON de nuevo a un arreglo de PHP
$json_array = json_decode($json);

// Mostrar la cadena JSON y la estructura del arreglo decodificado
var_dump($json); // Muestra el JSON como una cadena
var_dump($json_array); // Muestra el arreglo decodificado

echo "</pre>";

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
