<?php
/*
 * EXERCISE 2
 * create a program that add values in an array while that your length be down 120
 * and then show in scream.
 */

$group = array();

for ($i = 0; $i < 120; $i++ ){
    array_push($group, "value -> ".$i);
}

var_dump($group[45]);