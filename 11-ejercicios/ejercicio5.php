<?php
/*
 * EJERCICIO 5
 *
 * HACER UN PROGRAMA QUE MUESTRE TODOS LOS NÚMERO ENTRE LOS NÚMERO QUE NOS LLEGUEN POR LA URL
 * ($_GET)
 *
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($index = $numero1; $index <= $numero2; $index++) {
            echo "$index <br>";
        }
    }else{
        echo "el número 1 debe ser menor a número 2";
    }
} else {
    echo "<h1>los parametros get no existen</h1>";
}


