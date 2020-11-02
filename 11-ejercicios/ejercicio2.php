<?php

/*
 * crear un script en php que muestre por pantalla todos los número pares que
 * hay del 1 al 100
 */

$resultado = 0;

for($contador = 1; $contador <= 100; $contador++)
{
    if(($contador % 2) == 0){
        echo "$contador <br>";
    }

}