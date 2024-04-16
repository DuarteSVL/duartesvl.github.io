<?php


include "db_conn.php";



?>

<?php

if (isset($_GET['id'])) {
  // Get the id_noticia value from the URL
  $id_noticia = $_GET['id'];

  // Query to fetch the news article data from the database based on id_noticia
  $sql = "SELECT * FROM noticia WHERE id_noticia = $id_noticia";

  // Execute the query
  $result = $ligacaoBD->query($sql);

  // Check if the query was successful and if there is at least one row returned
  if ($result && $result->num_rows > 0) {
    // Fetch the news article data
    $row = $result->fetch_assoc();

    // Assign the fetched data to variables
    $titulo = $row['titulo'];
    $data = $row['data'];
    $imagem = $row['imagem'];
    $texto = $row['texto'];
    ?>

    <!DOCTYPE html>
    <html lang="pt-pt">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $titulo; ?></title>

      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



      <!--Owl Carousel-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!--FONTAWESOME-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Template Stylesheet -->
      
      <link href="css/headerFooter.css" rel="stylesheet">
      <link href="css/styles_footer.css" rel="stylesheet">


      <!-- Próprios -->
      <link rel="stylesheet" href="noticias.css">
      <script src="app.js"></script>



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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">CCR CCR</a>
                <ul class="dropdown-menu animate slideIn">
                  <li><a class="dropdown-item" href="sobreNos.html">Sobre nós</a></li>
                  <li><a class="dropdown-item" href="voluntariado.html">Voluntariado</a></li>
                  <li><a class="dropdown-item" href="PrivCookies.html">Política de Privacidade e Cookies</a></li>
                  <li><a class="dropdown-item" href="planoContigencia.html">Plano de contingência Covid-19</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown m-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Valências</a>
                <ul class="dropdown-menu animate slideIn">
                  <li><a class="dropdown-item" href="valencia_bercarioCreche.html">Berçário e creche</a></li>
                  <li><a class="dropdown-item" href="valencia_jardimInfancia.html">Jardim de infância</a></li>
                  <li><a class="dropdown-item" href="valencia_cicloBasico.html">1º Ciclo</a></li>
                  <li><a class="dropdown-item" href="valencia_centroApoioEscolar.html">Centro de Apoio Escolar</a></li>
                  <li><a class="dropdown-item" href="valencia_centroTerceiraIdade.html">Centro Apoio Terceira Idade</a></li>
                  <li><a class="dropdown-item" href="valencia_areaDesportivaRecreativa.html">Área Desportiva e
                      Recreativa</a></li>
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


      <!-- Breadcrumbs para a página -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Início</a></li>
          <li class="breadcrumb-item"><a href="./make_noticias.php">Notícias e Eventos</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            <?php echo $titulo; ?>
          </li>
        </ol>
      </nav>

      <!-- Container for content -->
      <div class="container my-5">
        <div class="bg-light p-4 rounded">
          <!-- Título -->
          <div class="d-flex justify-content-center mb-4"> <!-- Added margin bottom -->
            <h3>
              <?php echo $titulo; ?>
            </h3>
          </div>

          <!-- Data -->
          <h5 class="text-end small">
            <?php echo $data; ?>
          </h5>

          <div class="row">
            <!-- Imagem -->
            <div class="border col-md-4 float-md-end mb-3 mx-auto p-3" id="imgNoticia">
              <img src="../img_noticia/<?php echo $imagem; ?>" class="img-fluid" alt="">
            </div>

            <!-- Texto -->
            <div class="col-md-8"> <!-- Adjust width -->
              <p style="max-width: 100%; margin-left: 20px; margin-right: 20px;">
                <?php echo $texto; ?>
              </p>
            </div>
          </div>
        </div>
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

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </body>


    </html>

    <?php
  } else {
    // If no rows were returned, display an error message
    echo "Artigo não encontrado.";
  }
} else {
  // If id_noticia parameter is not set in the URL, display an error message
  echo "ID da notícia não especificado.";
}
?>