<?php

if(isset($_POST['name']) && isset($_POST['lastname'])){
    echo "<h1>".$_POST['name']."</h1>";
    echo "<h1>".$_POST['lastname']."</h1>";
}