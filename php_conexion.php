<?php

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("chat", $conexion);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");

try {
    $conexion = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
    date_default_timezone_set('America/Argentina/Buenos_Aires');
} catch (Exception $e) {

    echo "Error" . $e->getMessage();
}
