<?php

session_start();

if (!isset($_SESSION["number"])){
    $_SESSION['number'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['number']++;
}
if (isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['number']--;
}
?>
<h1>The value of session number is: <?=$_SESSION['number']?></h1>
<a href="exercise1.php?counter=1">Up value</a><br>
<a href="exercise1.php?counter=0">Up value</a>
