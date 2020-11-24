<?php

/*//open file
$open_file = fopen("text_file.txt", "a+");
//read content of file
while(!feof($open_file)){
    $content = fgets($open_file);
    echo $content."<br>";
}

//to write in the file
fwrite($open_file, "<br> add fourth line");

//close file
fclose($open_file);*/

copy('text_file.txt', 'file_copy.txt') or die("error al copiar");