<?php 

//trabaja con arreglos

$colores = array("rojo","verde", "amarillo");

//var_dump($colores);

foreach ($colores as $key => $value) {    
    echo $key ."=>". $value;
    echo "<br>";
}

foreach ($colores as $value)
{
    echo $value;
    echo "<br>";
}