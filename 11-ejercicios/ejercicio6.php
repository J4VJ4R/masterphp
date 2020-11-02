<?php
/*
 *IMPRIMIR POR PANTALLA TODAS LAS TABLAS DE MULTIPLICA DEL 1 AL 10 Y MOSTRARLA EN UNA
 * TABLA HTML
 *
 */




echo "<table border='1'> <tr>"; //inicio de la tabla
/*************************************************************/
echo "<tr>"; //fila 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<th>Tabla de multiplicar de $cabecera</th>";
    }
echo "</tr>"; //fin fila 1 de celdas
/**************************************************************/
echo "<tr>"; //inicio fila 2 celdas
for ($cabecera1 = 1; $cabecera1 <= 10; $cabecera1++){
    echo "<td>"; //fila inicio resultados
        for($result = 1; $result <= 10; $result++){
            echo "$cabecera1 * " . "$result" . " = " . ($cabecera1 * $result) . "<br>";
        }
    echo "</td>"; //fin fila resultados
}
echo "</tr>"; //fin fila 2 celdas


echo "</table>"; //fin de la tabla




