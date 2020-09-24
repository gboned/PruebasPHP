<?php

    /* Sesiones: variables que se guardan durante toda la aplicación, validaciones de formularios */
    // Inicializar sesión.
    // session_start();
    $_SESSION['mi_sesion'] = "valor";

    /* Cookies: se guardan en el cliente, él puede ver los valores que hay. */
    // Definir cookie:
    echo $_COOKIE['name'];