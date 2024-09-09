<?php
require_once('model/YamahaDAO.php');

class YamahaMotocicletaController {
    private $yamahaDAO;

    public function __construct () {
        $this->yamahaDAO = new YamahaDAO(); //Inicializa la propiedad.
    }

    public function main() {
        $action = (isset($_GET['action']))?$_GET['action']:"listar";
        switch ($action) {
            case 'listar':
                $this->listarYamahaMotocicletas();
                break;
            case 'agregar':
                    $this->agregarYamahaMotocicleta();
                    break;
            case 'eliminar':
                    $this->eliminarYamahaMotocicleta();
                    break;
            case 'editar':
                    $this->editarYamahaMotocicleta();
                    break;
            default:
                echo "Error: Unsupported action";
                break;
        }
    }

    private function listarYamahaMotocicletas() {
        $yamahaMotocicletas = $this->yamahaDAO->getYamahaMotocicletas();
        include_once('view/index.php');
    }

    private function agregarYamahaMotocicleta() {
        if (isset($_POST['btnGuardar'])) {
            $chasisNum = $_POST['chasisNum']; // Identificador único de la motocicleta Yamaha.
            $modelo = $_POST['modelo']; // Modelo específico de motocicleta Yamaha (e.j, YZF-R1, MT-09).
            $anio = $_POST['año']; // Año de fabricación.
            $color = $_POST['color']; // Color de motocicleta.
            $kilometraje = $_POST['kilometraje']; // Kilometraje Total en Kilometros.
            $this->yamahaDAO->addYamahaMotocicleta($chasisNum, $modelo, $anio, $color, $kilometraje);
            header('Location: index.php');
        } else {
            include_once('view/create.php');
        }
    }

    private function editarYamahaMotocicleta() {
        $pos = (isset($_GET['pos'])) ? $_GET['pos'] : -1;
        if ($pos != -1) {
            if (isset($_POST['btnGuardar'])) {
                $chasisNum = $_POST['chasisNum'];
                $modelo = $_POST['modelo'];
                $anio = $_POST['anio'];
                $color = $_POST['color'];
                $kilometraje = $_POST['kilometraje'];
                $this->yamahaDAO->editYamahaMotocicleta($pos, $chasisNum, $modelo, $anio, $color, $kilometraje);
                header('Location: index.php');
            } else {
                $yamahaMotocicleta = $this->yamahaDAO->getYamahaMotocicleta($pos);
                include_once('view/edit.php');
            }
        } else {
            header('Location: index.php');
        }
    }

    private function eliminarYamahaMotocicleta() {
        $pos = (isset($_GET['pos'])) ? $_GET['pos'] : -1;
        if ($pos != -1) {
            $this->yamahaDAO->delYamahaMotocicleta($pos);
        }
        header('Location: index.php');
    }
}