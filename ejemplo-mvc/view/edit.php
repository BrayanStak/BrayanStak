<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Motocicleta</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Chasis</td>
                <td>
                    <input type="number" name="chasisNum" id="chasisNum" value="<?php echo $yamahaMotocicleta->chasisNum; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td>
                    <input type="text" name="modelo" id="modelo" value="<?php echo $yamahaMotocicleta->modelo; ?>" />
                </td>
            </tr>
            <tr>
                <td>Año</td>
                <td>
                    <input type="text" name="anio" id="anio" value="<?php echo $yamahaMotocicleta->anio; ?>" />
                </td>
            </tr>
            <tr>
                <td>Color</td>
                <td>
                    <input type="text" name="color" id="color" value="<?php echo $yamahaMotocicleta->color; ?>" />
                </td>
            </tr>
            <tr>
                <td>Kilometraje</td>
                <td>
                    <input type="number" name="kilometraje" id="kilometraje" value="<?php echo $yamahaMotocicleta->kilometraje; ?>" />
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