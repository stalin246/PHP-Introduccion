
# Introducción a PHP

Este repositorio contiene ejemplos y explicaciones sobre los conceptos básicos de PHP.

## Temas Cubiertos

1. **variables.php**
   - Introducción a las variables en PHP.
   - Declaración y uso de variables.
   - Ejemplo:
     ```php
     $nombre = "Juan";
     $edad = 25;
     ```

2. **tipos-dato.php**
   - Tipos de datos en PHP.
   - Enteros, flotantes, cadenas, booleanos y arrays.
   - Ejemplo:
     ```php
     $numero = 10;
     $precio = 19.99;
     $nombre = "Luis";
     $activo = true;
     $productos = ["tablet", "televisor"];
     ```

3. **operadores.php**
   - Operadores aritméticos, de comparación, lógicos y de asignación.
   - Ejemplo:
     ```php
     $suma = 10 + 5;
     $igual = (10 == 5);
     $y = (true && false);
     $x += 10;
     ```

4. **comparacion.php**
   - Operadores de comparación en PHP.
   - Uso de `==`, `===`, `<`, `>`, `<=`, `>=`, `!=`, `!==`.
   - Ejemplo:
     ```php
     $esIgual = (10 == "10");
     $esIdentico = (10 === "10");
     ```

5. **inc-dec.php**
   - Operadores de incremento y decremento.
   - Pre-incremento, post-incremento, pre-decremento y post-decremento.
   - Ejemplo:
     ```php
     $x = 10;
     echo ++$x;
     echo $x--;
     ```

6. **string-methods.php**
   - Métodos y funciones para manipular cadenas.
   - `strlen()`, `trim()`, `strtoupper()`, `strtolower()`, `str_replace()`, `strpos()`.
   - Ejemplo:
     ```php
     $nombre = " Luis ";
     $nombre = trim($nombre);
     $nombreMayus = strtoupper($nombre);
     ```

7. **arrays.php**
   - Definición y uso de arrays en PHP.
   - Arrays indexados y asociativos.
   - Ejemplo:
     ```php
     $productos = ["tablet", "televisor", "radio"];
     $cliente = ["nombre" => "Juan", "saldo" => 200];
     ```

8. **arrays-assoc.php**
   - Uso de arrays asociativos.
   - Acceso y manipulación de elementos en arrays asociativos.
   - Ejemplo:
     ```php
     $cliente = ["nombre" => "Juan", "saldo" => 200];
     echo $cliente["nombre"];
     ```

9. **isset-empty.php**
   - Uso de `isset()` y `empty()` en PHP.
   - Verificación de existencia y contenido de variables.
   - Ejemplo:
     ```php
     if (isset($variable)) { ... }
     if (empty($variable)) { ... }
     ```

10. **funciones-arrays.php**
    - Funciones útiles para manipular arrays.
    - `array_push()`, `array_pop()`, `array_shift()`, `array_unshift()`, `array_merge()`, `count()`.
    - Ejemplo:
      ```php
      array_push($productos, "audífonos");
      $totalProductos = count($productos);
      ```

11. **condicionales.php**
    - Estructuras de control condicionales.
    - `if`, `else`, `elseif`, `switch`.
    - Ejemplo:
      ```php
      if ($x > 10) { ... } elseif ($x == 10) { ... } else { ... }
      ```

12. **loops.php**
    - Estructuras de control de bucles.
    - `for`, `while`, `do-while`.
    - Ejemplo:
      ```php
      for ($i = 0; $i < 10; $i++) { ... }
      ```

13. **foreach.php**
    - Uso del bucle `foreach` para iterar sobre arrays.
    - Ejemplos con arrays simples y asociativos.
    - Ejemplo:
      ```php
      foreach ($productos as $producto) { ... }
      ```

14. **funciones.php**
    - Definición y uso de funciones en PHP.
    - Parámetros, valores predeterminados y tipos de retorno.
    - Ejemplo:
      ```php
      function sumar($a, $b) {
          return $a + $b;
      }
      ```

15. **types.php**
    - Tipado estricto en PHP.
    - Declaración de tipos en parámetros y retornos de funciones.
    - Ejemplo:
      ```php
      declare(strict_types=1);
      function sumar(int $a, int $b): int {
          return $a + $b;
      }
      ```

16. **require.php**
    - Uso de `require` e `include` para incluir archivos.
    - Diferencias y aplicaciones.
    - Ejemplo:
      ```php
      require 'config.php';
      include 'header.php';
      ```

17. **json.php**
    - Manejo de JSON en PHP.
    - `json_encode()`, `json_decode()`.
    - Ejemplo:
      ```php
      $json = json_encode($productos);
      $productosArray = json_decode($json, true);
      ```

---

Este README proporciona una visión general de los temas fundamentales de PHP cubiertos en este repositorio. Cada archivo contiene ejemplos prácticos y explicaciones detalladas para facilitar el aprendizaje.

