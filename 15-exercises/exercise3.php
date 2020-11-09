<?php


/*
 * exercise 3
 *
 * create a program to try [if] the [variable] [is empty] and if this one [is empty]
 * [fill it] with [lowercase] and [show it] [in uppercase] and bold
 */

$x = "animal";
if(empty($x)){
    $x = "abcde";
    echo "<b>".strtoupper($x)."</b>";
}else{
    echo "The variable is fill with this value ".$x;
}
