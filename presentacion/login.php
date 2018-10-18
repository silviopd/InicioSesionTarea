<?php

require_once "../negocio/sesion.php";
require_once '../negocio/numeroAleatorios.php';
$correo = $_POST["txtCorreo"];
echo 'Correo: ' . $correo;
$clave = $_POST["campo"];
echo "clave: " . $clave;

if (empty($_POST["chkRecordar"]) == false) {
    $recordar = $_POST["chkRecordar"];
} else {
    $recordar = "N";
}
$objSesion = new Sesion();
$objAle = new numeroAleatorios();
$arr = $objAle->numeroAleatorio();
echo '<pre>';
print_r($arr);
echo '</pre>';


if ($objSesion->iniciarSesion($correo, $clave, $recordar) == true) {
    header("location:inicio.php");
} else {
    echo 'Erro de inicio de secion';
//    echo '<br>';
//    echo '' . $correo;
//    echo '<br>';
//    echo '' . $clave;
}

