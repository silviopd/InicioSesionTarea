<?php

require_once '../DAO/conexion.php';

class sesion extends conexion {

    public function iniciarSesion($correo, $clave, $recordar) {
        $sql = "select correo, clave, nombre, estado from usuario where correo = '$correo'";
        $resultado = $this->consultar($sql)->fetch();
        if ($resultado['clave'] == md5($clave)) {
            session_name("inicio");
            session_start();
            $_SESSION['correo'] = $correo;
            $_SESSION['nombre'] = $resultado['nombre'];
            if ($recordar == "S") {
                setcookie("S",$correo);
            }else {
                setcookie("S", " ");
            }
            return true;
        }
        return FALSE;
    }

}
