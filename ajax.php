<?php
session_start();
include_once "php_conexion.php";
include_once "funcion.php";
$usu = $_SESSION['nombre'];
$sql = $conexion->prepare("SELECT * FROM usuario WHERE usu='$usu'");
$sql->execute();
$respuesta = $sql->fetchAll();
foreach ($respuesta as $key) {

    $nombre = $usu;
    if ($key['color'] == 'verde') {
        $color = 'verde';
    } elseif ($key['color'] == 'azul') {
        $color = 'azul';
    }

}

if (!empty($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
    $fecha = date('Y-m-d');
    $hora = date('h:i:s');

    $sql = $conexion->prepare("INSERT INTO mensajes (mensaje,autor,fecha,hora,color) VALUES ('$mensaje','$nombre','$fecha','$hora','$color')");
    $sql->execute();

    $sql = $conexion->prepare("SELECT * FROM mensajes ORDER BY id");
    $sql->execute();
    $res = $sql->fetchAll();
    foreach ($res as $row) {
        $a = $row['color'];
        $sql1 = $conexion->prepare("SELECT * FROM usuario WHERE color='$a'");
        $sql1->execute();
        $resul = $sql1->fetchAll();
        foreach ($resul as $key) {
            if ($key['color'] == 'verde') {
                $color = 'alert alert-success';
            } elseif ($key['color'] == 'azul') {
                $color = 'alert alert-info';
            }
        }

        echo '<div class="' . $color . '" align="left"><strong>' . $row['fecha'] . ' ' . $row['hora'] . ' ' . $row['autor'] . ' DICE: </strong>' . expresiones($row['mensaje']) . '</div>';

    }
}
