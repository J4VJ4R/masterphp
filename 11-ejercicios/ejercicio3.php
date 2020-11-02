<?php

/*
 * crear un programa que imprima por pantalla los cuadrados de los primero 40 número naturales
 */

$resultado = 0;
for($contador = 1; $contador <= 40; $contador++){
    $resultado = $contador * $contador;
    echo "$resultado <br>";
}