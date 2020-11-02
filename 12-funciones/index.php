<?php

/*
 * FUNCIONES
 *
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que puede reutilizarlce
 * solamente invocando a la función tantas veces como queremos
 *
 * ESTRUCTURA
 *
 * function nombreDeMiFuncion($parametro){
 *         //bloque de instrucciones
 * }
 *
 * llamando a la función
 *
 * nombreDeMiFuncion($miParametro);
 */

function tabla($numero2){
    for ($i = 1; $i <= 10; $i++){
        echo "$numero2 * $i = ".($i * $numero2)."<br>";
    }
    echo "<hr>";
}

//invocando la function

/*if(isset($_GET['numero2'])){
    tabla($_GET['numero2']);
}else{
    echo "enter a validate number";
}*/

for ($i = 0; $i <= 10; $i++){
}

//ejemplo 3

function calculator($n1, $n2, $n3 = false){
    $suma = $n1 + $n2;
    $resta = $n1 - $n2;
    $mul = $n1 * $n2;
    $div = $n1 / $n2;
    $cadena_texto = "";

    if ($n3 != false){
        $cadena_texto .= "<h3>";
    }
    $cadena_texto .= "La suma de $n1 y $n2 es: $suma  <br>";
    $cadena_texto .= "La resta de $n1 y $n2 es: $resta <br>";
    $cadena_texto .= "La multiplicación de $n1 y $n2 es: $mul <br>";
    $cadena_texto .= "La división de $n1 y $n2 es: $div <br> <hr>";
    if ($n3 != false){
        $cadena_texto .= "</h3>";
    }
    var_dump($cadena_texto);
    return $cadena_texto;
}
 //call to calculator


//EXAMPLE 4

function getName($name){
    $only_name = "The name is: $name <br>";
    return $only_name;
}

function getLastName($lastname){
    $only_lastname = "The lastname is: $lastname <br>";
    return $only_lastname;
}

function returnName($name, $lastname){
    $fullname = "";
    $fullname .= (getName($name).getLastName($lastname)."<br>");
    return $fullname;
}

echo returnName("javier", "jaramillo");
echo returnName("Lucy", "Bonita");
echo getName("Carlos");