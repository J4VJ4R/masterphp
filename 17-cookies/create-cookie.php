<?php

/*
 * cookie: file that save data from information or use of the web site
 */

//basic cookie
setcookie("mycookie", "value of my cookie");

//cookie with expired
setcookie("oneyear", "value of my cookie of 365 days", time()+(60*60*24*365));
?>

<a href="see_cookies.php">See cookies</a>
