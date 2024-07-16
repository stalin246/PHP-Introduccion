<?php include 'includes/header.php'; // Incluye el archivo de cabecera

// Variables de autenticación
$autenticado = true; // Variable booleana que indica si el usuario está autenticado
$admin = false; // Variable booleana que indica si el usuario es administrador
echo "<br>";

// Estructura de control if-else para verificar la autenticación y el rol de administrador
if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente"; // Se ejecuta si el usuario está autenticado y es administrador
} else {
    echo "Usuario no autenticado, iniciar sesión"; // Se ejecuta si el usuario no está autenticado o no es administrador
}
echo "<br>";

// Definición de un arreglo asociativo para un cliente
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "Premium"
    ]
];
echo "<br>";

// Verificación si el arreglo $cliente está vacío usando empty
if (empty($cliente)) {
    echo "El arreglo de cliente está vacío";
} else {
    echo "El arreglo de cliente no está vacío";
    echo "<br>";
    // Verificación del saldo del cliente
    if ($cliente["saldo"] > 0) {
        echo "El saldo del cliente está disponible";
    } else {
        echo "No hay saldo";
    }
}
echo "<br>";

// Estructura de control if-else if-else para verificar el saldo y tipo del cliente
if ($cliente["saldo"] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente["informacion"]["tipo"] === "Premium") {
    echo "El cliente es Premium";
} else {
    echo "No hay cliente definido, no tiene saldo o no es Premium";
}

echo "<br>";

// Variable que indica la tecnología a evaluar
$tecnologia = "PHP";

// Estructura de control switch para evaluar la tecnología
switch ($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje"; // Se ejecuta si la tecnología es PHP
        break;

    case "JavaScript":
        echo "El lenguaje de la web"; // Se ejecuta si la tecnología es JavaScript
        break;

    default:
        echo "Algún lenguaje que no sé cuál es"; // Se ejecuta si la tecnología no coincide con los casos anteriores
        break;
}

include 'includes/footer.php'; // Incluye el archivo de pie de página
?>
