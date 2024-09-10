<?php

class YamahaMotocicleta {
    private $chasisNum;
    private $modelo;
    private $anio;
    private $color;
    private $kilometraje;

    public function __construct($chasisNum, $modelo, $anio, $color, $kilometraje) {
        $this->chasisNum = $chasisNum;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->color = $color;
        $this->kilometraje = $kilometraje;
    }

    public function __get($name) {  
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

}