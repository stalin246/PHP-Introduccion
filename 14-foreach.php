<?php 
// Incluir el archivo 'header.php' desde el directorio 'includes'
// Esto permite reutilizar el código del encabezado en múltiples archivos
include 'includes/header.php';

// Definir un arreglo multidimensional de productos
$productos = [
    [
        "nombre" => "tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "televisor",
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "monitor",
        "precio" => 200,
        "disponible" => false
    ]
];

// Recorrer el arreglo de productos utilizando foreach
foreach($productos as $producto) { ?>
    <li>
        <p>
            Producto: <?php echo $producto["nombre"]; ?><br>
            Precio: <?php echo "$" . $producto["precio"]; ?><br>
            <p><?php echo ($producto["disponible"]) ? "Disponible" : "No Disponible"; ?></p>
            <?php
                // Mostrar disponibilidad utilizando una estructura condicional
                if($producto["disponible"]) {
                    echo "<p> Disponible </p>";
                } else {
                    echo "<p> No Disponible </p>";
                }
            ?>
        </p>
    </li>
<?php }

// Incluir el archivo 'footer.php' desde el directorio 'includes'
// Esto permite reutilizar el código del pie de página en múltiples archivos
include 'includes/footer.php';
?>
