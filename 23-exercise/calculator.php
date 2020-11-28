<?php

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
switch ($operator){
    case '+':
        $result = ($number1+$number2);
        echo "<h1>The sum is: ".$result."</h1>";
        break;
    case '-':
        $result = ($number1-$number2);
        echo "<h1>The Sub is: ".$result."</h1>";
        break;
    case '*':
        $result = ($number1*$number2);
        echo "<h1>The Mul is: ".$result."</h1>";
        break;
    case '/':
        $result = ($number1/$number2);
        echo "<h1>The Div is: ".$result."</h1>";
        break;
    default:
        header("Refresh: 5; URL=index.php");

}
?>

<a href="exercise3.php"><h1>Back to Calculator</h1></a>

