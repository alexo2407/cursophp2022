<?php 

//incluimos la base de datos
require_once "db.php";

///agregando configuraciones de manera global

 $pdo = Conexion::conectar();
//seteamos para obtener objectos
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

//primero consulta
// $query = $pdo->query("SELECT * FROM cursos WHERE id BETWEEN 1 AND 5");

// Volcamos la informacion atraves de foreach asociativo

// while ($fila = $query->fetch()) {
//     echo "ID:" . $fila["id"]."<br>";
//     echo "ID:" . $fila["titulo"]."<br>";
//     echo "ID:" . $fila["contenido"]."<br>";
// }

// Volcamos la informacion atraves de foreach objeto
//ejemplo 2
// while ($fila = $query->fetch(PDO::FETCH_OBJ)) {
//     echo "ID:" . $fila->id."<br>";
//     echo "ID:" . $fila->titulo."<br>";
//     echo "ID:" . $fila->contenido."<br>";
// }


// ejemplo 3 parametros anonimo

//parametro a pasar
// $dato = "php";
// //definimos la consulta con parametro anonimo
// $query = "SELECT * FROM cursos WHERE titulo = ? ";
// // preparar la consulta
// $sentencia = $pdo->prepare($query);

// $sentencia->execute([$dato]);

// $listarCurso = $sentencia->fetch();

// var_dump($listarCurso);

// ejemplo 4 parametros vinnculos posicionales

// $dato = ".NET";
// //definimos la consulta con parametro asociativo
// $query = "SELECT * FROM cursos WHERE titulo = :titulo ";
// // preparar la consulta
// $sentencia = $pdo->prepare($query);

// $sentencia->execute([':titulo' => $dato]);

// $listarCurso = $sentencia->fetchAll();

// var_dump($listarCurso);

//contar las filas

//$id = 2;

//definimos la consulta con parametro asociativo
// $query = "SELECT * FROM cursos";
// preparar la consulta
$sentencia = $pdo->prepare("SELECT * FROM cursos");

$sentencia->execute();

$total = $sentencia->rowCount();

echo "El total de los cursos es:".$total;












?>