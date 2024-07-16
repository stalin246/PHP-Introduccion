<?php 

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir una variable de cadena
$nombreCliente = "Luis Stalin";

// strlen()
// Devuelve la longitud de la cadena
echo strlen($nombreCliente); // Salida: 11

// var_dump()
// Muestra información estructurada sobre la variable
var_dump($nombreCliente); // Salida: string(11) "Luis Stalin"

// trim()
// Elimina espacios en blanco (u otros caracteres) del inicio y final de la cadena
$texto = trim($nombreCliente);

// strlen() después de trim()
// Devuelve la longitud de la cadena después de aplicar trim
echo strlen($texto); // Salida: 11 (sin espacios adicionales en este caso)

// strtoupper()
// Convierte la cadena a mayúsculas
echo strtoupper($nombreCliente); // Salida: LUIS STALIN

// strtolower()
// Convierte la cadena a minúsculas
echo strtolower($nombreCliente); // Salida: luis stalin

// Comparación de correos electrónicos en minúsculas
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

// strtolower() y comparación
// Convierte ambos correos a minúsculas y luego compara
var_dump(strtolower($mail1) === strtolower($mail2)); // Salida: bool(true)

// str_replace()
// Reemplaza todas las apariciones de un string con otro
echo str_replace("Luis", "L", $nombreCliente); // Salida: L Stalin

// strpos()
// Encuentra la posición de la primera aparición de un substring en una cadena
echo strpos($nombreCliente, "Luis"); // Salida: 0

// Definir otra variable de cadena
$tipoCliente = "Premium";

// Concatenación de cadenas con el operador .
echo "<br>";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente; // Salida: El cliente Luis Stalin es Premium

// Interpolación de variables dentro de cadenas
echo "El cliente ${nombreCliente} es ${tipoCliente}"; // Salida: El cliente Luis Stalin es Premium

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
