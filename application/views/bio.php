<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Curriculum Vitae</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>

        <!-- Header-->
        <header>
            <nav class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                        <strong>Perfil</strong>
                    </a>

                </div>

            </nav>
        </header>
        <main role="main">
            <div class="jumbotron">
                <div class="row">
                <div class="col-sm-2">
                    <img src="<?= base_url() . 'images/' . $persona['imagen'] ?>" alt="..." class="img-thumbnail">
                </div>
                <div class="col-sm-10">
                   <h1 class="display-4"><?= $persona['nombre'] . " " . $persona['apellido'] ?></h1>
                    <hr class="my-4">
                    <p class="lead"><?= $persona['bio'] ?></p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> 
                </div>
            </div>
                
                
            </div>

        </main>
    </body>
</html>
