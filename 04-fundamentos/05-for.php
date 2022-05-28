<?php 

/* imprimir los numero del 1 al 100*/

for($num = 100 ; $num >=1; $num--)
{
    echo $num ;
    echo "<br>";
}

//Tabla de multiplicar

for($numero1=1; $numero1 <= 12; $numero1++)
{
    for($numero2=1; $numero2 <=10; $numero2++)
    {
        echo "$numero1 x $numero2 = ". $numero1 * $numero2 ;
        echo "<br>";
    }
    echo "<br>";
}