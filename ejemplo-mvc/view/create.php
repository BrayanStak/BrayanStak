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
                <select id="color" name="color">
                <option value="Rojo">Rojo</option>
                <option value="Azul">Azul</option>
                <option value="Negro">Negro</option>
                <option value="Blanco">Blanco</option>
                <option value="Gris">Gris</option>
                <option value="Cian">Cian</option>
                <option value="Amarillo">Amarillo</option>
                <option value="Otros">Otros</option>
            </select>
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
    <script>
    <script>
        function mostrarCampoColor() {
            var select = document.getElementById("color");
            var valorSeleccionado = select.value;
            var colorPersonalizado = document.getElementById("colorPersonalizado");

            if (valorSeleccionado.toLowerCase() === "otros") {
                colorPersonalizado.style.display = "block";
            } else {
                colorPersonalizado.style.display = "none";
            }
        }
    </script>
</script>
</body>
</html>