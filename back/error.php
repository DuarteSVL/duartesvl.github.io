
<?php

$error = $_SERVER['REDIRECT_STATUS'];

$error_title = ''; 
$error_message = '';

if($error == 404)
{
    $error_title = '404, página não encontrada';
    $error_message = 'Não foi encontrada...';
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Próprios -->
   <link rel="stylesheet" href="styles_contactos.css">
    <script src="app.js"></script>

</head>
<body>

    <h1 style="text-align: center;">Página não encontrada</h1> <br>

    <div class="d-flex justify-content-center mx-auto">
    <i class="bi bi-exclamation-triangle display-1 text-warning"></i> 
    </div> <br><br><br>
    
    <div class="d-flex justify-content-center mx-auto">
    <h4>Erro 404, a página não foi encontrada ou está indisponível.</h4> 
    </div><br><br>

    <div class="d-flex justify-content-center mx-auto">
    <p>A página que procura não existe ou não foi encontrada, por favor retroceda á página anterior 
        ou use a barra de navegação para redirecionar á ligação que pretende.</p><br>
    </div><br><br>


    <div class="d-flex text-align-center">
      <a class="d-flex mx-auto" href="#" target="_blank"><button class="btnPdf">Voltar ao Início</button></a>
    </div>
    
</body>
</html>