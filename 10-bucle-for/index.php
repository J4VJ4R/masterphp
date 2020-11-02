<?php

//for(variable contador, condición, incremento contador)
/*{
    bloque de instrucciones
}*/

/*
 * se quiere sumar todos los número del 1 al 100 y muestre el resultado final
 */

/*$resultado = 0;

for($i = 0; $i <= 100; $i++ ){
    $resultado = $resultado + $i;
}
echo "El resultado total es = $resultado";
*/

/************ ejemplo tabla de multiplica ******/

if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Table de multiplicar del número $numero</h1>";

for ($contador = 1; $contador <= 10; $contador++){
    if ($numero == 45){
        echo "no se pueden mostrar estas operaciones prohibidas";
        break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br>";
}