<?php 

//variables numericas
$numero = 100;

echo "Este es un numero entero"."=".$numero;
echo "<br>";
echo "Este es un numero entero $numero";
echo "<br>";
var_dump($numero);
echo "<br>";

//variables  tipo flotante (decimales)
$numero = 0.25;

echo "Este es un numero decimal"."=".$numero;
echo "<br>";
echo "Este es un numero decimal $numero";
echo "<br>";
var_dump($numero);
echo "<br>";

//variables  tipo flotante (decimales)
$palabra = "Lorem ipsum dolor sit amet.";

echo "Este es un numero decimal"."=".$palabra;
echo "<br>";
echo "Este es un numero decimal $palabra";
echo "<br>";
var_dump($palabra);
echo "<br>";


//variables  booleana
$verdad = TRUE;
$false = FALSE;

echo "Este es un verdadero"."=".$verdad;
echo "<br>";
echo "Este es un falso $false";
echo "<br>";
var_dump($false);
echo "<br>";

//arreglos
$frutas = ["papaya","melon","sandia"];
// $animales = array();

var_dump($frutas);

echo "Este es un arreglo"."=".$frutas[1];
echo "<br>";

//arreglos asociativos con propiedades
$autos = ["toyota" => "Land Cruiser" ,"Hiunday" => "Accent","Nissan" => "Sentra"];
echo "Este es un auto hiunday modelo $autos[Hiunday]";
echo "<br>";
echo "<br>";

/// objetos
$animales = (object) ["mamifero" => "vaca","insecto" => "abeja"];
echo "Este es un objecto de tipo animal= ".$animales->mamifero;
echo "<br>";



