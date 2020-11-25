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

// copy files
//copy('text_file.txt', 'file_copy.txt') or die("error al copiar");

//rename files
//rename('file_copy.txt', 'file_copy1.txt');

//delete file
//unlink('file_copy.txt') or die("Error to delete file");

//try if one file exist
if (file_exists('text_file1.txt')){
    echo "the file exists";
}else{
    echo "the file doesn't exist";
}