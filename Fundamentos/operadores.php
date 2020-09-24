<?php

    /* Operadores */
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
