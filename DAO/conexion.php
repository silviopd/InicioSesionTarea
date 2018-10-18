<?php

//use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author OmarGuevara
 */
class conexion {

    //put your code here
    private $url;

    function __construct() {
        $servidor = "pgsql:host=localhost;port=5432;dbname=bdcursosvirtuales";
        $usuario = "postgres";
        $clave = "usatING123";

        $this->url = new PDO($servidor, $usuario, $clave);
        $this->url->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
//        function __construct() {
//            $servidor = "pgsql:host=localhost;port=5432;dbname=bdcursosvirtuales";
//            $usuario = "postgres";
//            $clave = "usatING123";
//            
//            $this->dblink = new PDO($servidor, $usuario, $clave);
//            $this->dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////            echo 'Probado';
//        }

//    protected function conectar($c) {
//        if ($c == true) {
//            $servidor = "pgsql:host=localhost;port=5432;dbname=bdcursosvirtuales";
//            $usuario = "postgres";
//            $clave = "usatING123";
//            $this->url = new PDO($servidor, $usuario, $clave);
//            $this->url->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        } else {
//            
//        }
//    }

    protected function consultar($sql) {
        $resultado = 0;
        try {
            $resultado = $this->url->query($sql);
        } catch (Exception $exc) {
            $resultado = 0;
            echo $exc->getMessage();
            exit();
        }

        return $resultado;
    }
//
//    protected function ejecutarOrderDatos() {
//        $resultado = 0;
//        try {
//            $resultado = $this->url->query($sql);
//        } catch (Exception $exc) {
//            $resultado = 0;
//            echo $exc->getMessage();
//            exit();
//        }
//
//        return $resultado;
//    }

}

?>
