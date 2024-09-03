<?php
// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Obtener datos del formulario
$parcial1 = isset($_POST['parcial1']) ? floatval($_POST['parcial1']) : 0;
$parcial2 = isset($_POST['parcial2']) ? floatval($_POST['parcial2']) : 0;
$parcial3 = isset($_POST['parcial3']) ? floatval($_POST['parcial3']) : 0;
$examen_final = isset($_POST['examen_final']) ? floatval($_POST['examen_final']) : 0;
$trabajo_final = isset($_POST['trabajo_final']) ? floatval($_POST['trabajo_final']) : 0;


// Función para validar que las notas estén en el rango de 0 a 5
function validarNota($nota) {
    return $nota >= 0 && $nota <= 5;;
}



// Verificar que todas las notas sean válidas
if (!validarNota($parcial1) || !validarNota($parcial2) || !validarNota($parcial3) || !validarNota($examen_final) || !validarNota($trabajo_final)) {
    echo "<h1>Error</h1>";
    echo "<p>Las notas deben de estár en un rango de 0 a 5 por parcial.</p>";
    
} else {


// Calcular el promedio de los 3 parciales
$promedio_parciales = ($parcial1 + $parcial2 + $parcial3) / 3;

// Calcular la nota final
$nota_final = (0.35 * $promedio_parciales) + (0.35 * $examen_final) + (0.30 * $trabajo_final);

// Determinar si aprobó o no
$estado = ($nota_final >= 3) ? "Aprobó" : "No aprobó";


// Mostrar los resultados.
echo "<h1>Resultado</h1>";
echo "<p><strong>Nota Final:</strong> <span style='font-size: 1.5em; color: #a82525;'>" . number_format($nota_final, 2) . "</span></p>";
echo "<p><strong>Estado:</strong> <span style='font-size: 1.5em; color: " . ($estado === "Aprobó" ? "#28A745" : "#DC3545") . ";'>" . $estado . "</span></p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
</head>
<body>
<body>
    <style>
        
        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #145c7a;
        }
        form {
            background-color: #2c4466;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
        }
        input {
            padding: 10px;
            margin: 5px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;   

            border-radius: 4px;
            cursor: pointer;

        }
    </style>
</body>
</html>
