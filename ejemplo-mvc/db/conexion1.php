<?php 

class Conexion {
    private static $instance=null;
    private $con;

    private function __construct() {
        $this->con = new mysqli("localhost" ,"root" ,"" ,"ps_2922682");
    }

    public static function getInstance() {
        if (!isset (self::$instance)); {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getCon() {
        return $this->con;
    }
}


?>