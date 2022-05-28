<?php 


//validar si cumple o no cumple una condicion

$edad = 20;

if ($edad >= 18) 
{
    echo "Cumple con edad estipulada";
}
else 
{
    echo "No tiene la edad recomendad";
}

echo "<br>*****************************************<br>";

$poseeCedula = true;

if ($edad >= 18 && $poseeCedula) {
    
    echo "Puede Ingresar";

}
else
{
    echo "No tiene la edad recomendad";
}
echo "<br>*****************************************<br>";

// si el dato es nulo

$nombreCompleto = null;


if (is_null($nombreCompleto)) {

    echo "es nulo";
}
else
{
    echo $nombreCompleto;
}

echo "<br>*****************************************<br>";
// si el dato es vacio

$nombreCompleto2 = "";


if ($nombreCompleto  == "") {

    echo "es vacio";
}
else
{
    echo $nombreCompleto2;
}

echo "<br>*****************************************<br>";