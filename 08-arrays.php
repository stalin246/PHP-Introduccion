<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir un arreglo (array)
$carrito = ["tablet", "television", "radio"];

// Imprimir el contenido del arreglo de manera legible
echo "<pre>";
var_dump($carrito); // Muestra la estructura y contenido del arreglo
echo "</pre>";

// Acceder a un elemento específico del arreglo usando su índice
echo $carrito[1]; // Salida: television

// Agregar un nuevo elemento al arreglo en una posición específica
$carrito[3] = "nuevo producto...";

// Agregar un nuevo elemento al final del arreglo
array_push($carrito, "audifonos");

// Agregar un nuevo elemento al inicio del arreglo
array_unshift($carrito, "reloj");

// Imprimir nuevamente el contenido del arreglo después de las modificaciones
echo "<pre>";
var_dump($carrito); // Muestra la estructura y contenido actualizado del arreglo
echo "</pre>";

// Definir otro arreglo usando la función array()
$clientes = array("Cliente 1", "Cliente 2", "Cliente 3");

// Imprimir el contenido del arreglo de manera legible
echo "<pre>";
var_dump($clientes); // Muestra la estructura y contenido del arreglo
echo "</pre>";

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
