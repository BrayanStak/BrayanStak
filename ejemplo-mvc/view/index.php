<?php
require_once('model/YamahaMotocicleta.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Motocicletas</title>
</head>
<body>
    <a href="index.php?action=agregar">Agregar Motocicleta</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Posicion</td>
                <th>Chasis</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Kilometraje</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($yamahaMotocicletas as $key => $yamahaMotocicleta) {    
                ?>
                <tr>
                    <td><?php echo $yamahaMotocicleta->id; ?></td>
                    <td><?php echo $yamahaMotocicleta->chasisNum; ?></td>
                    <td><?php echo $yamahaMotocicleta->modelo; ?></td>
                    <td><?php echo $yamahaMotocicleta->anio; ?></td>
                    <td><?php echo $yamahaMotocicleta->color; ?></td>
                    <td><?php echo $yamahaMotocicleta->kilometraje; ?></td>
                    <td><a href="index.php?action=editar&pos=<?php echo $yamahaMotocicleta->id; ?>">Editar</a> 
                        <a href="index.php?action=eliminar&pos=<?php echo $yamahaMotocicleta->id; ?>">Eliminar</a></td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</body>
</html>