<?php
/*
 * 1. array con 8 numbers ok
 * 2. show and walk it ok
 * 3. order it and show it
 * 4. show length
 * 5. Search, find and show some elemente inside of array
 */

$numbersBox = array(1, 2, 33, 41, 5, 62, 7, 8);

foreach ($numbersBox as $numberBox){
    echo $numberBox."</br>";
}

//ascendent order

echo "<hr>";
echo "In order<br>";

asort($numbersBox);

foreach ($numbersBox as $number){
    echo $number."<br>";
}

//show the length of number variable

echo "<hr>";
echo "Length of array <br>";
$lengthNumber = count($numbersBox);
echo $lengthNumber;

//search some element

echo "<hr>";
echo "search number 5 and find it <br>";
echo "The result is in position ".array_search(5, $numbersBox);
