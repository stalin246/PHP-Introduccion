<?php
// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir una función llamada 'sumar' que toma dos parámetros enteros
// Los parámetros tienen valores predeterminados de 0
function sumar(int $num1 = 0, int $num2 = 0) {
    // Imprimir la suma de los dos números pasados como argumentos
    echo $num1 + $num2;
}

// Llamar a la función 'sumar' con diferentes argumentos
sumar(10, 20); // Salida: 30
echo "<br>";

sumar(10, 30); // Salida: 40
echo "<br>";

sumar(10, 40); // Salida: 50
echo "<br>";

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
