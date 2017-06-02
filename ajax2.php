<?php
session_start();
// if (!isset($_SESSION['nombre'])) {
//     header('location:index.php');
// }
include_once "php_conexion.php";
include_once "funcion.php";

$sql = $conexion->prepare("SELECT * FROM mensajes ORDER BY id");
$sql->execute();
$res = $sql->fetchAll();
foreach ($res as $row) {
    $a = $row['color'];
    $sql1 = $conexion->prepare("SELECT * FROM usuario WHERE color='$a'");
    $sql1->execute();
    $resul = $sql1->fetchAll();
    // var_dump($a);

    if ($row['color'] == 'verde') {
        $color = 'alert alert-success';
    } elseif ($row['color'] == 'azul') {
        $color = 'alert alert-info';
    }

    echo '<div class="' . $color . '" align="left">
    <strong>' . $row['fecha'] . ' ' . $row['hora'] . ' ' . $row['autor'] . ' DICE: </strong>' . expresiones($row['mensaje']) . '</div>';

}
