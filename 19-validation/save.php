<?php
$error = "We think that missing data";
if (!empty($_POST['name']) &&
   !empty($_POST['lastname']) &&
    !empty($_POST['age']) &&
    !empty($_POST['email']) &&
    !empty($_POST['password'])) {
    $error = "ok";

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = (int) $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate name
    if (!is_string($name) || preg_match("/[0-9]/", $name)){
        $error = "name";
    }
    // validate lastname
    if (!is_string($lastname) || preg_match("/[0-9]/", $lastname)){
        $error = "lastname";
    }
    // validate age
    if (!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)){
        $error = "age";
    }
    // validate email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "email";
    }
    // validate password
    if (empty($password) || strlen($password)<5){
        $error = "password";
    }

    /*var_dump($_POST);
    var_dump($error);
    die();*/

} else {
    $error = "missing data";
    header("Location:index.php?error=$error");
}
if ($error != "ok"){
    header("Location:index.php?error=$error");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($error == "ok"): ?>
<h1>Data ok</h1>
    <p><?=$name?></p>
    <p><?=$lastname?></p>
    <p><?=$age?></p>
    <p><?=$email?></p>
<?php endif; ?>
</body>
</html>