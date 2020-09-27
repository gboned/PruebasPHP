<?php

    /** While evalúa una expresión mientras sea verdadera.
     * while (expr)
     *  sentencia
     */

    $a = 10;
    $b = 5;

    while ($a != $b) {
        echo $b . "<br>";
        $b++;
    }

     /** Do while primero entra en el bloque, y luego evalúa la expresión, solo muestra 10
      * porque es cuando $a = $b.
      */

    do {
        echo $b . "<br>";
        $b++;
    } while ($a == $b);