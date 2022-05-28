<?php 

//variables  tipo flotante (decimales)
$titulo = "Producto n1";
$descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta hic eum laudantium fugiat odit cum soluta dolor explicabo iusto repudiandae, vel unde ut. Unde odit pariatur laboriosam aperiam vel!";



?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?=$titulo?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">
                            <?php 
                            echo $descripcion;
                            
                            ?>
                        </p>
                        <a href="#!" class="card-link">Card link</a>
                        <a href="#!" class="card-link">Another link</a>
                    </div>
                </div>
            </div>


            <div class="col-5">
                <?php 
    
                echo '<div class="card">
                <div class="card-body">
                <h4 class="card-title">'.$titulo.'</h4>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">
                '.$descripcion.'
                </p>
                <a href="#!" class="card-link">Card link</a>
                <a href="#!" class="card-link">Another link</a>
                </div>
            </div>';
                
                ?>
            </div>
        </div>
    </div>

    <script>

        <?php
        
        echo 'confirm("hola mundo desde js")';
        ?>
    </script>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>