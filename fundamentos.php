<?php


    // Esto es un comentario
    # Esto también es un comentario
    /** Y esto también es un comentario, esta vez
     * en bloque.
     */

    // Declarar variables, añadiendo un '$' al principio, se devuelven
    // también con echo.
    $saludo = "Hola, ¿Cómo estás?";
    $numero = 24;

    // Para añadir un salto de línea, primero concatenamos las distintas
    // variables con un '.', luego añadimos "\n".
    echo $saludo . "\n";
    echo $numero . "\n";

    echo "HOLA MUNDO";

    // Declarar una constante, define("parámetro 1: nombre de constante", "parámetro 2: texto para constante"):
    # Constantes NO pueden cambiar nunca su valor en todo el Script.
    define ('MI_CONSTANTE', 'CONSTANTE');

    # Constante array
    define ('MI_ARRAY', array("2", "3"));

    // Asignar las constantes a variables:
    $_miconstante = MI_CONSTANTE;
    $_miarray = MI_ARRAY;

    // Imprimir las constantes por pantalla.
    echo "\t" . MI_CONSTANTE . "\t" . $_miarray . "\n";
    
    // print_r para imprimir arrays.
    print_r(MI_ARRAY);
    print_r(MI_ARRAY[1]);

    # Operadores
    // Lógicos; $a and $b, $a or $b, $a xor $b (solo 1 puede ser True), ! $a, 
    // $a && $b, $a || $b.

    // De asignación; $a = "Uno", $b = $a (b vale Uno).

    $a = $b = $c = "HOLA MUNDO"; # Los tres valen lo mismo.

    // De comparación; $a == $b, $a === $b (igual y del mismo tipo), $a != $b,
    // $a <> $b, $a !== $b (no son iguales ni del mismo tipo), $a < $b, $a > $b,
    // $a <= $b, $a >= $b. 

    // De incremento/decremento; ++$a (incrementa uno y devuelve a), $a++ (incrementa uno pero a vale lo mismo de antes), --$a, $a--.

    $a = 5;

    echo "\n" . $a . "\n";
    echo ++$a . "\n";
    echo $a . "\n";

    // De String; con el . se concatenan cadenas (salto de línea, variables, cadenas), .= es el operador de asignación 
    // sobre concatenación.

    $a = "juan ";
    $b = $a .= "lopez";
    $c = "pedro ";
    $c .= "garcia";

    echo $b . "\n" . $c . "\n";

    // echo y print_r para mostrar datos por pantalla, el segundo sirve para mostrar contenido de arrays también.
    
    echo "hola";
    
    print_r("Mundo");

    // Inclusión de páginas PHP con include y require.

    include "scripts2.php"; # Incluye página PHP, da warning si no la encuentra, pero sigue la ejecución.
    // Una vez se incluye, se puede hacer uso del contenido del fichero.
    echo "\n" . $var;

    require "scripts2.php"; # Incluye página PHP, para la ejecución si no la encuentra.

    # Para incluir una sola vez, mirando que no estén ya incluidas en el programa:

    include_once "scripts2.php";
    
    require_once "scripts2.php";

    // Sesiones: variables que se guardan durante toda la aplicación, validaciones de formularios
    // Inicializar sesión.
    // session_start();
    $_SESSION['mi_sesion'] = "valor";

    // Cookies se guardan en el cliente, él puede ver los valores que hay.
    // Definir cookie:
    echo $_COOKIE['name'];

    // Incluir PHP dentro de HTML. PHP se interpreta en el servidor.
    /*     <html>
        <head>
            <title></title>
        </head>
        <body>
            <h2>Hola, soy un html</h2>
            <?php
                $variable1 = "25";
                $variable2 = "5";

                echo $variable1 * $variable2;
            ?>
        </body>
        </html> */

?>

<a href="sesiones.php">Sesiones</a>;