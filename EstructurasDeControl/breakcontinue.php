<?php

    /** Break: Finaliza ejecución de estructura for, foreach, while, do-while o switch.
     * 
     *  Continue: Dentro de estructuras for, foreach, while, do-while o switch para pasar a la siguiente iteración del bucle.
     *  */    

     for ($i = 0; $i < 10; $i++) {
         if ($i == 5) {
            break;
         }

         echo $i . "<br>";
     }