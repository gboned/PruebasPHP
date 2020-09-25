<?php

    /** Los arrays pueden contener elementos de cualquier tipo,
     * la posición de los elementos comienza por 0.
     */
    $array_1 = array("1", "2", "3", "4", array("juan", "diego"));

    $array_2 = array("uno", "dos", "tres", "cuatro");

    // Para acceder al elemento 2 de $array_2:
    echo $array_2[1] . "\n";

    // Hacer un echo de una array, solo muestra el tipo de objeto 
    // que es (Array), para mostrar lo que contiene, se usa print_r.
    // Para hacer que se vea ordenado en navegador, echo "<pre>".
    echo "<pre>" . "\n";
    echo $array_2 . "\n";
    print_r($array_1);
    echo "</pre>";

    /** Arrays asociativos */
    $array_as = array(
        "1" => "valor1", 
        "2" => "valor2", 
        "3" => "valor3",
        "4" => $array_2,
    );
    // Para acceder al valor2, habría que acceder a su clave 2.
    echo $array_as[2] . "\n";
    print_r($array_as);

    /** Funciones de arrays */
    // Saber si una función es array:
    echo is_array($array_as);

    // Más funciones en php.net/manual/es/ref.array.php.