<?php

// Declarar tipos estrictos
declare(strict_types=1);

// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir una función llamada 'usuarioAutenticado'
// La función toma un parámetro booleano y devuelve un string o null
function usuarioAutenticado(bool $autenticado) : ?string {
    // Verificar si el usuario está autenticado
    if($autenticado) {
        return "El usuario está autenticado";
    } else {
        return "No autenticado";
    }
}

// Llamar a la función 'usuarioAutenticado' y almacenar el resultado en $usuario
$usuario = usuarioAutenticado(true);

// Imprimir el resultado
echo $usuario; // Salida: El usuario está autenticado

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
