<?php 

declare(strict_types=1);


//estamos creando la funcion suma
function SUMA(int $numero1, int $numero2):string
{
     $resultado = $numero1 + $numero2;
     //echo "El resultado de la suma de $numero1 + $numero2 es :".$resultado;

     return "este es el resultado".$resultado;

}

$lasuma = suma(10,20);

var_dump($lasuma);
echo $lasuma;

