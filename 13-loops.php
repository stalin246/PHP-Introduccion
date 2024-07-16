<?php include 'includes/header.php'; // Incluye el archivo de cabecera

// Bucle while
$i = 0; // Inicializa la variable $i en 0

// Mientras $i sea menor que 10, ejecuta el bucle
while ($i < 10) {
    echo $i . "<br>"; // Imprime el valor de $i seguido de un salto de línea
    $i++; // Incrementa $i en 1 en cada iteración
}

echo "<br>"; // Salto de línea en HTML

// Bucle do-while
$i = 0; // Reinicializa la variable $i en 0

// Ejecuta el bloque de código primero y luego verifica la condición
do {
    echo $i . "<br>"; // Imprime el valor de $i seguido de un salto de línea
    $i++; // Incrementa $i en 1 en cada iteración
} while ($i < 10); // Condición para continuar el bucle

echo "<br>"; // Salto de línea en HTML

// Bucle for
// Inicializa $i en 0, ejecuta el bucle mientras $i sea menor que 10, incrementa $i en 1 en cada iteración
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>"; // Imprime el valor de $i seguido de un salto de línea
}

echo "<br>"; // Salto de línea en HTML

// Bucle for con lógica FizzBuzz
// Inicializa $i en 1, ejecuta el bucle mientras $i sea menor que 1000, incrementa $i en 1 en cada iteración
for ($i = 1; $i < 1000; $i++) {
    // Si $i es múltiplo de 3 y de 5, imprime "FIZZ BUZZ"
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "- FIZZ BUZZ <br/>";
    }
    // Si $i es múltiplo de 3, imprime "Fizz"
    else if ($i % 3 === 0) {
        echo $i . "- Fizz <br/>";
    }
    // Si $i es múltiplo de 5, imprime "Buzz"
    else if ($i % 5 === 0) {
        echo $i . "- Buzz <br/>";
    }
    // Si $i no es múltiplo de 3 ni de 5, imprime solo el valor de $i
    else {
        echo $i . "<br>";
    }
}

$clientes = array("Pedro", "Juan", "Karen");

// Recorrer el arreglo de clientes utilizando foreach
foreach($clientes as $cliente):
    echo $cliente . "<br/>"; // Imprime cada nombre de cliente seguido de un salto de línea
endforeach;

// Definir un arreglo asociativo de un cliente con claves y valores
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "tipo" => "Premium"
];

// Recorrer el arreglo asociativo utilizando foreach
foreach($cliente as $key => $valor):
    echo $key . "-" . $valor . "<br/>"; // Imprime cada clave y valor del arreglo asociativo seguido de un salto de línea
endforeach;

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos


include 'includes/footer.php'; // Incluye el archivo de pie de página
?>
