<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir una variable llamada $nombre y asignarle el valor "Stalin"
$nombre = "Stalin";

// Imprimir el valor de la variable $nombre
echo $nombre; // Salida: Stalin

// Mostrar información estructurada sobre la variable $nombre
// Muestra el tipo de dato y el valor de la variable
var_dump($nombre); // Salida: string(6) "Stalin"

// Definir una constante llamada 'constante' y asignarle el valor "Esto es un valor constante"
define("constante", "Esto es un valor constante");

// Imprimir el valor de la constante 'constante'
echo constante; // Salida: Esto es un valor constante

// Definir una constante utilizando la palabra clave 'const'
const constante2 = "hola2";

// Imprimir el valor de la constante 'constante2'
echo constante2; // Salida: hola2

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
