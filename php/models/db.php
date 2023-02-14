<?php

    try {
        $mysqli = new mysqli("localhost", "root", "", "dblemans");
        $mysqli->set_charset("utf8");
        date_default_timezone_set("America/La_Paz");
    } catch (\Throwable $th) {
        die("No se encontró la base de datos");
    }
    // try {
    //     $mysqli = new mysqli("localhost", "root", "", "dbric");
    //     $mysqli->set_charset("utf8");
    //     date_default_timezone_set("America/La_Paz");
    // } catch (\Throwable $th) {
    //     die("No se encontró la base de datos");
    // }
?>