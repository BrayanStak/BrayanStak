<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Saludo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <div class="container">
    <form method="post" action="saludo.php">
        <table class="table">
            <tr>
                <td>Nombre</td>
                <td>
                    <input class="form-comtrol" type="text" name="nombre" id="nombre" placeholder="Nombre Aprendiz" />
                </td>
            </tr>
            <tr>
                <td>
                    Genero
                </td>
                <td>
                <select name="genero">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="centrar" colspan="2">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>