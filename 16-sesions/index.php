<?php

/*
 * sesions: save and persis data while the user is in the web site
 * until close his session or close the browser
 */


session_start();
//local variable
$normal_variable = "I'm a string";
//session variable
$_SESSION['persistent_variable'] = "I'm an active session";
echo $normal_variable."<br>";
echo $_SESSION['persistent_variable'];