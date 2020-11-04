<?php

$peliculas = array('Batman', 'spiderman', '2020', 'Matrix');
$singers = ['Mercury', 'Shakira', 'Mily', 'Drake'];

//show array elements in a list
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){
    echo "<li>movie number ".$i."="."$peliculas[$i]"."</li>";
}
echo "</ul>";

//foreach
echo "<ul>";
foreach ($singers as $singer){
    echo "<li>$singer <br></li>";
}
echo "</ul>";


$personas = array(
    'nombre' => 'Javier',
    'lastname' => 'Jaramillo',
    'Web' => 'javierjaramillo.tech'
);



//arrays multidimensión

$contacts = array(
    array(
        'name' => 'Antonio',
        'mail' => "anonio@antonio.com"
    ),
    array(
        'name' => 'Luis',
        'mail' => "luis@luis.com"
    ),
    array(
        'name' => 'Ernesto',
        'mail' => "ernesto@ernesto.com"
    ),
);

foreach ($contacts as $contact){
    echo $contact['name']." - ";
    echo  $contact['mail']."<br>";
}