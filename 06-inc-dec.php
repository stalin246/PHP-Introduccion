<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir una variable numérica
$numero1 = 30;

// Incremento pre-decremento
// Incrementa $numero1 en 1 y luego lo imprime
echo ++$numero1; // Salida: 31

// Incremento de asignación
// Incrementa $numero1 en 5
$numero1 += 5; // $numero1 ahora es 36

// Definir otra variable numérica
$numero2 = 30;

// Decremento pre-decremento
// Decrementa $numero2 en 1 y luego lo imprime
echo --$numero2; // Salida: 29

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
