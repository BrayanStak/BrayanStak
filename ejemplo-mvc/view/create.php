<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamaha Motocicletas</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Número del Chasis</td>
                <td>
                    <input type="number" name="chasisNum" id="chasisNum" />
                </td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td>
                    <input type="text" name="modelo" id="modelo" />
                </td>
            </tr>
            <tr>
                <td>Año</td>
                <td>
                    <input type="number" name="año" id="año" />
                </td>
            </tr>
            <tr>
                <td>Color</td>
                <td>
                    <input type="text" name="color" id="color" />
                </td>
            </tr>
            <tr>
                <td>Kilometraje</td>
                <td>
                    <input type="number" name="kilometraje" id="kilometraje" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button name="btnGuardar" id="btnGuardar">Guardar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>