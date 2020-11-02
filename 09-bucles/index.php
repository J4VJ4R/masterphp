<?php
/************ Ejemplo do while **********/


$edad = 17;
$contador = 1;

do{
    //instrucciones
    echo "Tienes acceso al canal privado $contador <br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);