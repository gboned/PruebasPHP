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
