<?php

session_name("inicio");
session_start();
unset($_SESSION['correo']);
unset($_SESSION['nombre']);
session_destroy();

//$nom = $_SESSION['nombre'];

header("location:index.php");
//$_SESSION['correo'] = $correo;
//$_SESSION['nombre'] 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
