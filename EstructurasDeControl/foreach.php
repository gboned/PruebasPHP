<?php

    /** Foreach se utiliza para recorrer arrays u objetos, se puede utilizar de 2 formas;
     * foreach (expresión_array as $valor)
     *      sentencias
     * foreach (expresión_array as $clave => $valor)
     *      sentencias
     */

     $arr = array("uno", "dos", "tres");

     foreach ($arr as $value) {
         echo $value . "<br>";
      }

      $arr_clave = array(
          "1" => "uno", 
          "2" => "dos", 
          "3" => "tres"
        );

      foreach ($arr_clave as $key => $value) {
          echo $key . " = " . $value . "<br>";
       }