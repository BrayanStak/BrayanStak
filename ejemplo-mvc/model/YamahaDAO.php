<?php
require_once('model/YamahaMotocicleta.php');

class YamahaDAO {

    public function __construct() {
        $_SESSION['yamahaMotocicletas']=array(
            new YamahaMotocicleta(346612,'YZF-R1',2024,"Negro", 6000),
            new YamahaMotocicleta(454334,'MT-09',2022,"Roja", 2500),
            new YamahaMotocicleta(213215,'CBR-01',2020,"Azul", 3600),
            // Más motocicletas.            
        );
    }

    public function getYamahaMotocicletas() {
        return $_SESSION['yamahaMotocicletas'];
    }

    public function addYamahaMotocicleta($chasisNum, $modelo, $anio, $color, $kilometraje) {
        $yamahaMotocicleta = new YamahaMotocicleta($chasisNum, $modelo, $anio, $color, $kilometraje);
        array_push($_SESSION['yamahaMotocicletas'], $yamahaMotocicleta);
    }

    public function editYamahaMotocicleta($pos, $chasisNum, $modelo, $anio, $color, $kilometraje) {
        $yamahaMotocicleta = $_SESSION['yamahaMotocicletas'][$pos];
        $yamahaMotocicleta->chasisNum = $chasisNum;
        $yamahaMotocicleta->modelo = $modelo;
        $yamahaMotocicleta->anio = $anio;
        $yamahaMotocicleta->color = $color;
        $yamahaMotocicleta->kilometraje = $kilometraje;
    }



    public function delyamahaMotocicleta($posicion) {
        unset($_SESSION['yamahaMotocicletas'][$posicion]);
    }

    public function getyamahaMotocicleta($posicion) {
        return $_SESSION['yamahaMotocicletas'][$posicion];
    }
}