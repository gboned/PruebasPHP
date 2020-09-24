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