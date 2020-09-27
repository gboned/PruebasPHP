<?php

    /** For evalúa una expresión. Formato:
     * for (expr1; expr2; expr3)
     *  sentencia
     * Se evalúa la expr1 mientras la expr2 es TRUE. La expr3 es cambio de variable,
     * que incrementa o decrementa.
     */

    # Devolver los valores de i, que comienza siendo cero, mientras sea menor de 10, j
    # va aumentando de 2 en 2, sin límite.

     for ($i = 0, $j = 0; $i < 10; $i++, $j+=2) {
        echo 'i: = ' . $i . "\n";
        echo 'j: = ' . $j . "\n";
     }