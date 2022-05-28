<?php 

$miNombre = "Alberto";

echo $miNombre;

//Forzar el dato con un tipado

//(bool)
//(int)
//(float)
//(string)
//(array)
//(object)

$variableNumerica = (int) 100;
$variableBooleana = (bool) false;
$variableTexto = (string) "Hola Mundo";


var_dump($variableNumerica);
echo "<br>"; //br es un salto de linea
var_dump($variableTexto);
echo "<br>";
var_dump($variableBooleana);


//variable decimales 

$base = (float) 10.2;
$altura = (float) 20.5;

echo "<br>";
$areaRectangulo = $base * $altura;
echo "El area del rectangulo es = ".$areaRectangulo;
echo "<br>";

//el area del triangulo

$areaTriangulo = ($base * $altura) / 2;
echo "El area del triangulo es = ".$areaTriangulo;
echo "<br>";


echo $evaluar = (2 - 5) * (5 + 2) * -1;
echo "<br>";
echo "<br>";

//SCOPE de la variabe

$telefono = 75354338;


function MostrarTelefono()
{
    $telefono = 84152321;
    echo "El mi numero de telf es = ".$telefono;
    echo "<br>";
}

MostrarTelefono();

//variables super globales
$mensaje = "Hola mundo";

function MostarMensaje()
{
    global $mensaje;
    echo "Mi mensaje es = ".$mensaje;
    echo "<br>";
}

MostarMensaje();

//variables estaticas

function contador()
{
    //variable estatica
    static $cont = 1;
    //imprimiendo en pantalla
    echo $cont;

    //imcrementar la variable en 1
    //$cont = $cont + 1;
    $cont ++;

}

echo "<br>";
contador();
echo "<br>";
contador();
echo "<br>";
contador();

//variables seteadas isset: determina si una variable esta definida
echo "<br>";

$edad = 15;

//operador ternario

echo (isset($edad) and $edad > 18) ? "Es mayor de edad" : "No cumple con la edad";
echo "<br>";

















