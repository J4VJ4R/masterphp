<?php
/*
 * create an array with the next content
 *
 * ACCION   AVENTURA    DEPORTE
 * gta      assasins    fifa19
 * cod      cris        pes19
 * pug      prince      moto19
 *
 * show it in html
 *
 * Each column would be in separate file use include
 */

$table = array(
    "ACTION" => array("gta5", "cod", "pugb"),
    "ADVENTURE" => array("assasins", "crash", "prince of persia"),
    "SPORTS" => array("fifa19", "pes19", "motogp19")
);

$categories = array_keys($table);
?>

<table border="1">
    <?php require_once 'exercise5/headers.php'?>
    <?php require_once 'exercise5/firstrow.php'?>
    <?php require_once 'exercise5/secondrow.php'?>
    <?php require_once 'exercise5/thirdhrow.php'?>
</table>
