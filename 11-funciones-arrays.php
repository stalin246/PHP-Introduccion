<?php include 'includes/header.php'; // Incluye el archivo de cabecera

// Definición de un arreglo llamado $carrito
$carrito = ["tablet", "computador", "television"];

// Uso de in_array para verificar si un elemento está en el arreglo
var_dump(in_array("tablet", $carrito)); // true porque "tablet" está en $carrito
var_dump(in_array("audifonos", $carrito)); // false porque "audifonos" no está en $carrito

// Definición de un arreglo numérico
$numeros = array(1, 2, 3, 4, 5, 1, 2);

// Ordena el arreglo en orden ascendente
sort($numeros); // Ahora $numeros está ordenado de menor a mayor
// Ordena el arreglo en orden descendente
rsort($numeros); // Ahora $numeros está ordenado de mayor a menor

echo "<pre>";
var_dump($numeros); // Imprime el arreglo ordenado en orden descendente
echo "</pre>";

// Definición de un arreglo asociativo
$clientes = array(
    "saldo" => 200,
    "tipo" => "premium",
    "nombre" => "Juan"
);

echo "<pre>";
var_dump($clientes); // Imprime la estructura del arreglo asociativo $clientes
echo "</pre>";

// Ordena el arreglo asociativo por los valores en orden ascendente
asort($clientes);
// Ordena el arreglo asociativo por los valores en orden descendente
arsort($clientes);

// Ordena el arreglo asociativo por las claves en orden ascendente
ksort($clientes);
// Ordena el arreglo asociativo por las claves en orden descendente
krsort($clientes);

echo "<pre>";
var_dump($clientes); // Imprime la estructura del arreglo asociativo $clientes ordenado
echo "</pre>";

include 'includes/footer.php'; // Incluye el archivo de pie de página
?>
