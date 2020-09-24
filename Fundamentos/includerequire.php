<?php

/* Inclusión de páginas PHP con include y require. */

include "scripts2.php"; # Incluye página PHP, da warning si no la encuentra, pero sigue la ejecución.
// Una vez se incluye, se puede hacer uso del contenido del fichero.
echo "\n" . $var;

require "scripts2.php"; # Incluye página PHP, para la ejecución si no la encuentra.

// Para incluir una sola vez, mirando que no estén ya incluidas en el programa:

include_once "scripts2.php";

require_once "scripts2.php";