<?php

$flor = "girasol";

function flowerType(){
    global $flor;
    echo "$flor";

    $age = 1;
    echo "<br> la edad del $flor is ";
    return $age;

}



//FUNCIONES VARIABLES

function buenasdias(){
    return "como amaneces?";
}

function buenastardes(){
    return "que tal el almuerzo?";
}

function buenasnoches(){
    return "es hora de dormir";
}

//here there is a variable function

$horario = $_GET['horario'];

$mensaje = "buenas".$horario;

echo $mensaje();