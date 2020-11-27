<?php

/*
 * 1. would have a function
 * 2. validate an email with filter_var
 * 3. get a variable and validate it
 * 4. show result
 */


function validate($email){
    $status = "incorrect email";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "correct email";
    }
    return $status;
}

if (isset($_GET['email'])){
    echo validate($_GET['email']);
}else{
    echo "we have an email";
}

