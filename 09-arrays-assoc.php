<?php include 'includes/header.php'; // Incluye el archivo de cabecera

// Definición de un arreglo asociativo llamado $cliente
$cliente = [
    "nombre" => "Juan", // Llave 'nombre' con valor 'Juan'
    "saldo" => 200, // Llave 'saldo' con valor 200
    "informacion" => [ // Llave 'informacion' que es otro arreglo asociativo
        "tipo" => "premium" // Llave 'tipo' con valor 'premium' dentro del arreglo 'informacion'
    ]
];

echo "<pre>"; // Etiqueta HTML <pre> para mostrar el contenido con formato

// var_dump imprime la estructura y contenido del arreglo $cliente
var_dump($cliente);

echo "</pre>"; // Cierra la etiqueta HTML <pre>

echo "<pre>"; // Abre nuevamente la etiqueta <pre>

// var_dump imprime el valor de la llave 'nombre' del arreglo $cliente
var_dump($cliente["nombre"]);

echo "</pre>"; // Cierra la etiqueta <pre>

// Imprime el valor de la llave 'saldo' del arreglo $cliente
echo $cliente["saldo"];

// Imprime el valor de la llave 'tipo' dentro del subarreglo 'informacion' del arreglo $cliente
echo $cliente["informacion"]["tipo"];

// Agrega una nueva llave 'codigo' con valor 21351 al arreglo $cliente
$cliente["codigo"] = 21351;

echo "<pre>"; // Abre nuevamente la etiqueta <pre>

// var_dump imprime la estructura y contenido actualizado del arreglo $cliente
var_dump($cliente);

echo "</pre>"; // Cierra la etiqueta <pre>

include 'includes/footer.php'; // Incluye el archivo de pie de página
?>
