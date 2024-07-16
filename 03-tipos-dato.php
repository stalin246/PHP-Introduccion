<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Booleanos
// El tipo de dato booleano representa dos valores posibles: true o false
$logueado = false; // también puede ser true
var_dump($logueado); // Salida: bool(false)

// Enteros
// El tipo de dato entero (integer) es un número sin decimales
$numero = 200;
var_dump($numero); // Salida: int(200)

// Flotantes
// El tipo de dato float (flotante) representa números con decimales
$float = 20.5;
var_dump($float); // Salida: float(20.5)

// Cadenas de texto
// El tipo de dato string (cadena de texto) es una secuencia de caracteres
$nombre = "Luis";
var_dump($nombre); // Salida: string(4) "Luis"

// Arrays
// El tipo de dato array es una colección de valores. Puede contener cualquier tipo de dato.
$array = [];
var_dump($array); // Salida: array(0) { }

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
