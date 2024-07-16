<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir cuatro variables numéricas
$numero1 = 20;
$numero2 = 20;
$numero3 = 40;
$numero4 = "30";

// Operadores de comparación

// Menor que
// Verifica si $numero1 es menor que $numero3
var_dump($numero1 < $numero3); // Salida: bool(true)
echo "<br>";

// Mayor que
// Verifica si $numero3 es mayor que $numero2
var_dump($numero3 > $numero2); // Salida: bool(true)
echo "<br>";

// Igualdad
// Verifica si $numero1 es igual a $numero2 (valor)
var_dump($numero1 == $numero2); // Salida: bool(true)
echo "<br>";

// Identidad
// Verifica si $numero1 es idéntico a $numero2 (valor y tipo)
var_dump($numero1 === $numero2); // Salida: bool(true)
echo "<br>";

// Nave espacial
// Compara $numero1 y $numero2
// Devuelve -1 si $numero1 < $numero2, 0 si $numero1 == $numero2, y 1 si $numero1 > $numero2
var_dump($numero1 <=> $numero2); // Salida: int(0)
echo "<br>";

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
