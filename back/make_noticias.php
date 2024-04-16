<?php

include "db_conn.php";


if (isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $sql = "SELECT * FROM noticia WHERE activo = 1 AND CONCAT(titulo, texto, imagem) LIKE '%$filtervalues%' ORDER BY ordem DESC, data desc";
} else {
    $sql = "SELECT * FROM noticia WHERE activo = 1 ORDER BY ordem DESC, data desc";
}

$result = $ligacaoBD->query($sql);

if (!$result) {
    die("Invalid query: " . mysqli_error($ligacaoBD));
}
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias e Eventos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Próprios -->
    <link rel="stylesheet" href="noticias.css">
    <script src="app.js"></script>

    <style>
        .card {
            margin-bottom: 10px;
            /* Space between cards */
        }
    </style>

    
    <!-- Favicon -->
    <link rel="icon" type="images" href="images/logo2.png">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!--BOOTSTRAP-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!--BOOTSTRAP JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

      <!--Owl Carousel-->
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--FONTAWESOME-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Template Stylesheet -->
    <link href="css/styles_geral.css" rel="stylesheet">
    <link href="css/headerFooter.css" rel="stylesheet">
        <link href="css/styles_footer.css" rel="stylesheet">
</head>

<body>

<!-- Navbar Aqui Dentro -->
<nav class="navbar navbar-expand-lg sticky-top" id="navbar">
    <div class="container-fluid">
      <!-- Logotipo e Texto -->
      <div class="col-1" id="navLogo">
        <a href="index.html"><img class="col-lg-12 col-md-8 col-sm-6" src="imagens/Geral/logo2.png" id="logo"></a>
      </div>
      <div class="col-md-2 d-flex d-none d-lg-block" id="navTexto">
        <h5>CCR-CCR</h5>
        <p>Centro Cultural Recreativo <br> das Crianças do Cruzeiro e Rio-Seco</p>
      </div>
      <!-- button menu mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Lista botões -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <!-- Itens do menu aqui -->
          <li class="nav-item m-2">
            <a class="nav-link active" aria-current="page" href="index.html">Início</a>
          </li>
          <li class="nav-item dropdown m-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CCR CCR</a>
            <ul class="dropdown-menu animate slideIn">
              <li><a class="dropdown-item" href="sobreNos.html">Sobre nós</a></li>
              <li><a class="dropdown-item" href="voluntariado.html">Voluntariado</a></li>
              <li><a class="dropdown-item" href="PrivCookies.html">Política de Privacidade e Cookies</a></li>
              <li><a class="dropdown-item" href="planoContigencia.html">Plano de contingência Covid-19</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown m-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Valências</a>
            <ul class="dropdown-menu animate slideIn">
              <li><a class="dropdown-item" href="valencia_bercarioCreche.html">Berçário e creche</a></li>
              <li><a class="dropdown-item" href="valencia_jardimInfancia.html">Jardim de infância</a></li>
              <li><a class="dropdown-item" href="valencia_cicloBasico.html">1º Ciclo</a></li>
              <li><a class="dropdown-item" href="valencia_centroApoioEscolar.html">Centro de Apoio Escolar</a></li>
              <li><a class="dropdown-item" href="valencia_centroTerceiraIdade.html">Centro Apoio Terceira Idade</a></li>
              <li><a class="dropdown-item" href="valencia_areaDesportivaRecreativa.html">Área Desportiva e Recreativa</a></li>
            </ul>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="ementas.html">Ementas</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="precario.html">Preçário</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="noticias.html">Notícias</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="contactos.html">Contactos</a>
          </li>
          <div class="d-flex">
            <a href="https://www.educabiz.com/" target="_blank">
              <img src="imagens/Geral/educabiz 2.png" alt="" id="educabiz">
            </a>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fim da Navbar -->



    <!--Titulo-->
    <div class="d-flex justify-content-center">
        <h1>
            <a href="?">Notícias e Eventos</a>
        </h1>
    </div>

    <!--Row e cols para espaçar filtros e noticias-->
    <div class="row" style="width:100%">

        <div class="col-2">

            <!--Filtros-->
            <div class="navbar-form navbar-left sticky-top d-none d-md-block" id="filtros">
                <h6>Procurar</h6>
                <hr>

                <form action="" method="GET">
                    <div class="input-group form-control mr-sm-2">
                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                            echo $_GET['search'];
                        } ?>" class="form-control" placeholder="">
                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Procurar</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="col">
            <!-- Noticias -->


            <!-- Card Deck 1 -->
            <div class="container-fluid justify-content-start">
                <?php
                $count = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($count % 3 == 0) {
                            echo '<div class="row">';
                        }
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card h-100">';
                        // Imagem
                        echo '<img class="card-img-top" src="../img_noticia/' . $row['imagem'] . '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        // Título
                        echo '<h5 class="card-title text-center">' . $row['titulo'] . '</h5>';
                        echo '<p class="card-text">';
                        if (strlen($row['texto']) > 100) {
                            echo substr($row['texto'], 0, 100) . '...';
                        } else {
                            echo $row['texto'];
                        }
                        echo '</p>';
                        echo '</div>';
                        echo '<div class="card-footer d-flex justify-content-between">'; // Align "Ver Mais" to the right
                        // Data
                        echo '<small class="text-muted text-start">' . $row['data'] . '</small>';
                        // Link para página da noticia com ID como parâmetro
                        echo '<a href="./noticia_artigo.php?id=' . $row['id_noticia'] . '" class="card-link text-end">Ver Mais</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        if ($count % 3 == 2) {
                            echo '</div>';
                        }
                        $count++;
                    }
                }
                ?>
            </div>


            <!-- Fim Noticias -->
        </div>

        <!-- Fim row -->
    </div>

    <div class="container-fluid g-0">
      <footer>
        <div class="container d-flex pt-4">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-3 col-lg-3 mb-4">
              <div class="row mx-auto">
                <div class="col-12 linkTitulo mb-2">
                  <h6>Links úteis</h6>
                </div>
                <div class="col-12 text-justify">
                  <div class="footerLink">
                    <a href="contactos.html">Localizações</a>
                  </div>
                  <div class="footerLink">
                    <a href="sobreNos.html">Sobre nós</a>
                  </div>
                  <div class="footerLink">
                    <a href="PrivCookies.html"
                      >Política de Privacidade e Cookies</a
                    >
                  </div>
                  <div class="footerLink">
                    <a href="voluntariado.html">Voluntariado</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center mb-2">
                  <h6>Entre em contacto connosco</h6>
                </div>
                <div class="col-12 text-center">
                  <a href="contactos.html" class="btn btn-footer px-4 py-2"
                    >Contacte-nos</a
                  >
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center mb-2">
                  <h6>Siga as nossas redes</h6>
                </div>
                <div class="col-12 text-center mb-4">
                  <div class="row">
                    <div class="col-4 col-lg-12 mb-lg-4">
                      <a
                        class="icone-redes"
                        href="https://www.facebook.com/CCRCCR.Colegio"
                        target="_blank"
                        ><i class="fa-brands fa-square-facebook fa-2xl"></i
                      ></a>
                    </div>

                    <div class="col-4 col-lg-12 mb-lg-4">
                      <a
                        class="icone-redes"
                        href="https://www.instagram.com/ccrccr.colegio/"
                        target="_blank"
                        ><i class="fab fa-square-instagram fa-2xl"></i
                      ></a>
                    </div>

                    <div class="col-4 col-lg-12">
                      <a
                        class="icone-redes"
                        href="https://www.youtube.com/@CCRCCR.Colegio"
                        target="_blank"
                        ><i class="fab fa-youtube fa-2xl"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 col-lg-3">
              <div class="row">
                <div class="col-12">
                  <div class="reclamacoesContainer text-center">
                    <a
                      href="https://www.livroreclamacoes.pt/Inicio/"
                      target="_blank"
                    >
                      <img
                        class="img-fluid"
                        src="imagens/Geral/livro_reclamacoes.png"
                        alt=""
                    /></a>
                  </div>
                </div>

                <div class="col-12 entidadeReguladora mb-4">
                  <p>Entidade Reguladora: ISS Centro Distrital de Lisboa</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid containerLogoNome">
          <div class="col-12 pt-2 gx-5">
            <div class="row">
              <div class="col-12 text-center">
                <div class="logo-container">
                  <img
                    class="img-fluid"
                    src="imagens/Geral/logo2.png"
                    alt=""
                    id="imgFoot"
                  />
                </div>
              </div>
              <div class="col-12 text-center logoTexto">
                <p>
                  CCR CCR - Centro Cultural Recreativo das Crianças do Cruzeiro
                  e Rio-Seco
                </p>
              </div>
              <div class="col-12 text-center pt-2 direitosReservados">
                <p>2024 Todos os Direitos Reservados&copy;</p>
              </div>
            </div>
          </div>
        </div>
      </footer>



</body>

</html>