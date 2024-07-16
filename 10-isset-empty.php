<?php include 'includes/header.php'; // Incluye el archivo de cabecera

// Definición de arreglos
$clientes = []; // Arreglo vacío
$clientes2 = array(); // Otra forma de definir un arreglo vacío
$clientes3 = array("Pedro", "Juan", "Karen"); // Arreglo con tres elementos

// Uso de empty para verificar si los arreglos están vacíos
var_dump(empty($clientes)); // true porque $clientes está vacío
var_dump(empty($clientes2)); // true porque $clientes2 está vacío
var_dump(empty($clientes3)); // false porque $clientes3 tiene elementos

echo "<br>"; // Salto de línea en HTML

// Uso de isset para verificar si las variables están definidas y no son null
var_dump(isset($clientes4)); // false porque $clientes4 no está definido
var_dump(isset($clientes2)); // true porque $clientes2 está definido
var_dump(isset($clientes3)); // true porque $clientes3 está definido

echo "<br>"; // Salto de línea en HTML

// Definición de un arreglo asociativo
$clientes = [
    "nombre" => "Luis",
    "saldo" => 200
];

// Uso de isset para verificar si la clave 'nombre' está definida en el arreglo $clientes
var_dump(isset($clientes["nombre"])); // true porque 'nombre' está definido en $clientes

include 'includes/footer.php'; // Incluye el archivo de pie de página
?>
