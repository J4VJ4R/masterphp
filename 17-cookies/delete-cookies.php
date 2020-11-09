<?php

if (isset($_COOKIE['mycookie'])){
    unset($_COOKIE['mycookie']);
    setcookie('mycookie', '', time()-100);
}else{
    echo "we haven't anything";
}
