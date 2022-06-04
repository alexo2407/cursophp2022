<?php

//declaramos la clase de la Imagen
class ImagenController
{

    //crear el metodo subirimagen
    public function subirImagenController()
    {

        //tabla de la BD
        $tabla = "documentos";

        //directorio donde se guardara el archivo
        $uploadDir = "upload";

        if (!empty($_FILES['file']['name'])) 
        {
            if ($_FILES['file']['error'] > 0) {
                echo "Ocurrio un error";
            } 
            else 
            {
                //asignar esas variables 
                $tmpFile = $_FILES['file']['tmp_name'];
                $fileType = $_FILES['file']['type'];
                //el tamaño del documento
                $fileSize = $_FILES['file']['size'];

                //subimos el archivo 
                //cambiar el nombre del archivo
                $fileName = time() . '-' . $_FILES['file']['name'];
                //la ruta final del archivo
                $urlDoc = $uploadDir . '/' . $fileName;

                //obtener el MIME

                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $fileContents = file_get_contents($tmpFile);
                $mimeType = $finfo->buffer($fileContents);

                //validamos las extensiones

                $extensionesValidas = ["image/jpeg", "image/png", "image/jpg", "application/pdf"];


                //validamos la extension si se encuentra en nuestros parametros aceptados
                if (in_array($mimeType, $extensionesValidas) && $fileSize <= 2000000) {

                    //mover del directorio temporal al nuevo directorio
                    if (move_uploaded_file($tmpFile, $urlDoc)) {

                    $datosController = array(
                                        "nombre" => $fileName,
                                        "url" => $urlDoc,
                                        "file" => $tmpFile,
                                        "type" => $fileType,
                                        "size" => $fileSize
                                        );

                       $resultadoController = ImagenModel::subirImagenModel($datosController,$tabla);

                       if($resultadoController == "exitoso"){
                           // echo "se guardo correctamente";
                         header("location:index.php?mensaje=ok");   
                       }else 
                       {
                            //echo "no se guardo";
                        header("location:index.php?mensaje=error");
                       }

                    }
                } else {
                    header("location:index.php?mensaje=tamanio");
                }
            }
        } 
        // else {
        //     header("location:index.php?mensaje=noExiste");
        // }
    }

    /**
     * Mostrar las imagenes
     */

    public static function mostrarImagenesController()
    {
         //tabla de la BD
         $tabla = "documentos";
         //mostrar los datos del modelos        
        $resultadoController = ImagenModel::mostrarImagenModel($tabla);

        return $resultadoController;
    }

    /**
     * Mostrar las imagenes
     */

    public static function borrarImagenesController()
    {
         //tabla de la BD
         $tabla = "documentos";
         //mostrar los datos del modelos    
         
        if(isset($_GET['idBorrar']))
        {
            $idImagen = $_GET['idBorrar'];
            $urlImagen = $_GET['image'];
            $resultadoController = ImagenModel::borrarImagenModel($urlImagen,$idImagen,$tabla);
            if ($resultadoController == 'exitoso')
             {
               header("location:index.php?mensaje=borrado");
            }
        }
       
    }


}
