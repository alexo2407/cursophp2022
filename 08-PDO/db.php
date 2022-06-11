<?php 

class Conexion
{

    public static function conectar()
    {
        # variables de conexion a la BD
        $host = "DESKTOP-Q581RPC";
        $usuario = "root";
        $pass = "admin";
        $baseDatos = "pdo";

        $dns = 'sqlsrv:Server='.$host.';Database='.$baseDatos;

        try {

            $repuesta = new PDO($dns,$usuario, $pass);

            $repuesta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch ( PDOException $e) 
        {
            echo "Error en la conexión". $e -> getMessage();
        }

        return $repuesta;

    }

}


//  $conect = Conexion::conectar();
//  var_dump($conect);



?>