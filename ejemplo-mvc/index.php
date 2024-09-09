<?php
require_once('controller/YamahaController.php');

session_start();

if (!isset($_SESSION['controller'])) {
    $_SESSION['controller']=new YamahaMotocicletaController();
}

$controller = $_SESSION['controller'];

$controller->main();