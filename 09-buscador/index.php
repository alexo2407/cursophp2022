

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carga de archivos Seguros con PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css" integrity="sha512-KVdV5HNnN1f6YOANbRuNxyCnqyPICKUmQusEkyeRg4X0p8K1xCdbHs32aA7pWo6WqMZk0wAzl29cItZh8oBPYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    :root {
      --fuentePrimaria: 'Playfair Display', serif;
      --fuenteSecundaria: 'Raleway', sans-serif;
      --primario: #037bc0;
    }

    h2 {
      font-size: 3rem;
    }

    .titulo {
      font-family: 'Playfair Display', serif;
    }

    .titulo span {
      color: #037bc0;
    }

    .fondo {
      background-color: #def0fc;
    }

    .formulario {
      width: 800px;
      height: 100%;
    }

    .img-thumbnail {
      object-fit: cover;

      height: 200px;
    }
  </style>

</head>

<body>

  <div class="container">
    <header class="header pt-4">
      <h1 class="titulo text-center my-4">Buscador web con <span>PHP y AJAX</span></h1>
    </header>
  </div>


  <div class="container">
    <div class="col-12 text-center">
     
      <hr>
    </div>
  </div>

  <div class="container formulario">
    <div class="col fondo">
      <h4 class="h3 text-center">Cursos de desarrollo</h4>

      <form method="POST">
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="text" class="form-control" name="buscar" id="buscador" aria-describedby="helpId" placeholder="Ingrese el texto a buscar">
            </div>
          
        <!-- <input class="btn btn-primary col-12" type="submit" value="Subir archivo" /> -->
      </form>
    </div>
    <hr>
  </div>

  <div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Curso</th>
              <th scope="col">Descripci??n del curso</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody id="app">
        
            
          </tbody>
        </table>
      </div>
    </div>
    </div>
  
 
  <footer class="footer">
    <div class="container mt-4 py-4">

      <div class="row  text-center">
        <div class="col-12">
          <p>Curso desarrollo web con PHP</p>
        </div>

        <!-- agregando algo al git -->
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="app.js"></script>

</body>

</html>