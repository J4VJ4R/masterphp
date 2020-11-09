<?php


if (isset($_COOKIE['mycookie'])){
    echo $_COOKIE['mycookie']."<br>";
}else{
    echo "We haven't cookies";
}

if (isset($_COOKIE['oneyear1'])){
    echo $_COOKIE['oneyear']."<br>";
}else{
    echo "We haven't cookies with expired";
}