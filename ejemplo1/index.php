<?php

$apellido = 'Mendez';
$nombre = "Freddy $apellido";
$nombre2 = 'Mendez $apellido';
$edad = 40;
$peso = 90.5;
$altura = 1.72;
$esColombiano = FALSE;

echo $nombre;
echo "<br>";
echo $nombre2;

for ($i = 0; $i < 10; $i++) {
    if ($i%2==0) {
        echo "<h2> $i Numero Par </h2>";
    } else {
        echo "<h2> $i Numero No es Par </h2>";
    }
}

$elemtos = array("escribir"=>"Lapiz","registrar"=>"Cuaderno","lineas"=>25, "peso"=>10.5);

foreach($elemtos as $key => $val) {
    echo "<h4>[$key] = $val </h4>";
}