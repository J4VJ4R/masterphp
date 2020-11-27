<?php


if(!is_dir('my_folder')){
    mkdir('my_folder', 0777) or die("We haven't to create folder");
}else{
    echo "The folder exists";
}

//delete folder
//rmdir('my_folder');
echo "<hr> <h1>Content of folder</h1>";
if($gestor = opendir('./my_folder')){
    while (false !== ($file = readdir($gestor))){
        if ($file != '.' && $file != '..'){
            echo $file."</br>";
        }
    }
}