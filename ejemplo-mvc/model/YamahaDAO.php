<?php

require_once('db/conexion1.php');
require_once('model/YamahaMotocicleta.php');

class YamahaDAO {

    public function __construct() {

            // Más motocicletas.            
    }

    public function getYamahaMotocicletas() {
        try {
            //code...
            $db = conexion::getInstance();
            $con = $db->getCon();
            $rs = $con->query("SELECT * FROM yamahaMotocicleta");
            $filas = array();
            while ($row = $rs->fetch_object()) {
            array_push($filas, $row);
    
            }
            return $filas;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function addYamahaMotocicleta($chasisNum, $modelo, $anio, $color, $kilometraje) {
        $db = conexion::getInstance();
        $con = $db->getCon();
        $rs = $con->query("INSERT INTO yamahaMotocicleta (chasisNum, modelo, anio, color, kilometraje) "
        ." VALUES ($chasisNum, '$modelo', $anio, '$color', $kilometraje)");
    }

    public function editYamahaMotocicleta($pos, $chasisNum, $modelo, $anio, $color, $kilometraje) {
        $db = conexion::getInstance();
        $con = $db->getCon();
        $rs = $con->query("UPDATE yamahaMotocicleta SET chasisNum = $chasisNum,"
        . " modelo='$modelo', anio=$anio, color='$color' , kilometraje=$kilometraje WHERE id=$pos");
        echo var_dump("C=".$chasisNum);
        echo var_dump("K=".$kilometraje);
    }



    public function delyamahaMotocicleta($posicion) {
        $db = conexion::getInstance();
        $con = $db->getCon();
        $rs = $con->query("DELETE FROM yamahaMotocicleta WHERE id=$posicion");
    }

    public function getyamahaMotocicleta($posicion) {
        $db = conexion::getInstance();
        $con = $db->getCon();
        $rs = $con->query("SELECT * FROM yamahaMotocicleta WHERE id=$posicion");
        return $rs->fetch_object();
    }
}