<?php

/*
 * create script for 4 variables
 * 1 - array
 * 2 - string
 * 3 - int
 * 4 - bolean
 *
 * Print a message with the type of variable
 */

function typeValue($value){
    echo "The value is = ".gettype($value);
    echo "<br>";
}

$array1 = array(1, 2);
$str1 = "hola";
$int1 = 1;
$bol1 = true;

typeValue($array1);
typeValue($str1);
typeValue($int1);
typeValue($bol1);

