<?php

$file = $_FILES['file'];
$name = $file['name'];
$type = $file['type'];

if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif"){
    if(!is_dir('images')) {
        mkdir('images', 0777);
    }
        header('Refresh: 5; URL=exercise1.php');
        move_uploaded_file($file['tmp_name'], 'images/'.$name);
        echo "<h1>Image uploading correctly</h1>";

}else{
    header("Refresh: 5; URL=exercise1.php");
    echo "<h1>upload a correct image</h1>";
}