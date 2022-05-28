<?php 

//DEFINAMOS LAS CONSTANTES

//1-No necesita el simbolo $
//2-usamos el metodo llamado DEFINE
//3-se asigna una sola vez
//4-Su alcance es globla

// DEFINE('CUOTA',250);


// $valorCuota = CUOTA;

// echo "El valor de la cuota es :". $valorCuota;

//DEFINE('CUOTA2',10000);
//echo "El valor de la cuota es :". CUOTA2;

//bUENAS PRACTICAS EN EL USO DE CONSTANTES

//1-USAR SIEMPRE MAYUSCULAS

//NO USAR NOMBRE DE CONSTANTES COMO _VALOR_

//NO USAR NOMBRES CON GUION BAJO _

//https://www.php.net/manual/es/reserved.variables.server.php
// VARIABLE SUPERGLOBALES

// echo "<br>";
// echo $_SERVER['PHP_SELF'];

// $obternerUrl = explode('/',$_SERVER['PHP_SELF']);

// var_dump($obternerUrl);

// echo "Estamos en : ". $obternerUrl[3];


$url = "https://pstg-online.edu.ni/course/view.php?id=2763";

$obternerUrl = explode('/',$url);

var_dump($obternerUrl);

//echo "Estamos en : ". $obternerUrl[3];

?>

<?php 

if ($obternerUrl[3] == 'course') {

echo '<h1> Estamos en la seccion de los Cursos</h1>';
}
else if($obternerUrl[3] == 'administration')
{
    echo '<h1> Estamos en la seccion de Administrativa</h1>';
}



?>





