<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <?php
    
    for ($i = 0; $i < 10; $i++) {
        echo ' $i ';
        echo " $i ";
        echo "<br />";
    }
    
    $datos = array("uno"=>"Juan","dos"=>"Pedro","tres"=>"Luis");

    foreach ($datos as $key => $valor) {
        #echo $key . "=>" . $valor . "<br />";
        echo $datos[$key]."<br />";
    }


    ?>
</body>
</html>