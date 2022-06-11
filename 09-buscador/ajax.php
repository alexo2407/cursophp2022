<?php

require_once "modelo.php";
require_once "controlador.php";

class Ajax
{
    public function leerCursoAjax($datosAjax)
    {
        $repuesta = new controlador();

        $cursos =  $repuesta->leerCursoController($datosAjax);

        foreach ($cursos as $curso) :
?>
            <tr>
                <th scope="row"><?php $curso['id']?></th>
                <td><?php $curso['titulo']?></td>
                <td> <?php $curso['contenido']?></td>
                <td><a class="btn btn-danger" href="#">ELIMINAR</a></td>
            </tr>


<?php

        endforeach;
    }
}

//SELECT * FROM cursos WHERE titulo LIKE '%a%' LIMIT 0 , 3

if ($_POST['buscarCursos'] != "")
{
  echo "llego el post correctamente";

  $mostrarCurso = new Ajax();

  $dataBuscar = array('titulo' => $_POST['buscarCursos'] );

  $mostrarCurso->leerCursoAjax($dataBuscar);


}



?>