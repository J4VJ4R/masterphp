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
<h1>Validation of forms in PHP</h1>
<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "missing data") {
        echo "<h2 style='color: red'>
                please enter all data
              </h2>";
    }
}

?>
<form action="save.php" method="post">
    <label for="name">Name</label>
    <p>
        <input type="text" name="name"  >
    </p>
    <label for="lastname">lastname</label>
    <p>
        <input type="text" name="lastname"  >
    </p>
    <label for="age">Age</label>
    <p>
        <input type="number" name="age"  >
    </p>
    <label for="email">email</label>
    <p>
        <input type="text" name="email" >
    </p>
    <label for="password">Password</label>
    <p>
        <input type="password" name="password" >
    </p>
    <p>
        <input type="submit" value="Send">
    </p>
</form>
</body>
</html>