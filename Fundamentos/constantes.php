<?php

    /*     Declarar una constante, define("parámetro 1: nombre de constante", "parámetro 2: texto para constante")
        Constantes NO pueden cambiar nunca su valor en todo el Script. */
    define ('MI_CONSTANTE', 'CONSTANTE');

    // Constante array
    define ('MI_ARRAY', array("2", "3"));

    // Asignar las constantes a variables:
    $_miconstante = MI_CONSTANTE;
    $_miarray = MI_ARRAY;

    // Imprimir las constantes por pantalla.
    echo "\t" . MI_CONSTANTE . "\t" . $_miarray . "\n";
    
    // print_r para imprimir arrays.
    print_r(MI_ARRAY);
    print_r(MI_ARRAY[1]);
