<?php
/*
 * recoger 2 número con la url parametro get y hacer todas las operaciones
 * básicas de una calculadora, suma resta, multiplicación y división
 *
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero2 = $_GET['numero2'];
    $numero1 = $_GET['numero1'];
    echo "<h1>CALCULADORA</h1>";
    //suma
    echo "la suma de $numero1 + $numero2 = ".($numero1 + $numero2)." <br>";
    //resta
    echo "la resta de $numero1 - $numero2 = ".($numero1 - $numero2)."<br>";
    //multiplicación
    echo "la multiplicación de $numero1 * $numero2 = ".($numero1 * $numero2)."<br>";
    //división
    echo  "la división de $numero1 / $numero2 = ".($numero1 / $numero2)."<br>";
}else{
    echo "<h1>Introduce correctamente los valores por la url</h1>";
}
