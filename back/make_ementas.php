<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ementas</title>

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
    table {
      border-collapse: collapse;
      border: 2px solid rgb(200, 200, 200);
      letter-spacing: 1px;
      font-size: 0.8rem;
    }

    td,
    th {
      border: 1px solid rgb(190, 190, 190);
      padding: 10px 20px;
    }

    td {
      text-align: center;
    }

    caption {
      padding: 10px;
    }


    .tablesE {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }


    .table {
      background-color: #ffffff;
    }



    /* Centering table headers */
    .table thead th {
      text-align: center;
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!--BOOTSTRAP JS-->
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
  <link href="css/styles_geral.css" rel="stylesheet">
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
  <div class="container my-5 tablesE">

    <h2><a href="./make_ementas.php"> Ementas </a></h2>


    <?php

    include "db_conn.php";

    ?>


    <div class="table-responsive">
      <table class="table">
        <tr>
          <th></th>
          <th>Sopa</th>
          <th>Prato</th>
          <th>Dieta</th>
          <th>Vegetariano</th>
          <th>Sobremesa</th>
          <th>Lanche</th>
        </tr>
        <?php
        // Loop through each meal type
        $meal_types = ['Sopa', 'Prato', 'Dieta', 'Vegetariano', 'Sobremesa', 'Lanche'];
        foreach ($meal_types as $meal_type) {
          echo '<tr>';
          // Display the meal type in the first column
          echo '<th>' . $meal_type . '</th>';
          // Query to fetch 'nome' values where 'tipo' is equal to the current meal type and 'valencia' is equal to 'Basico', ordered by 'id_celula'
          $query = "SELECT r.nome
                FROM celula c
                INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                WHERE c.tipo = '$meal_type' AND c.valencia = 'Basico'
                ORDER BY c.id_celula ASC";
          $result = mysqli_query($ligacaoBD, $query);
          // Loop through the fetched data and populate the table cells
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
          }
          echo '</tr>';
        }
        ?>
      </table>
    </div>


    <style>
      .table-responsive {
        overflow-y: auto;
        /* Enable vertical scrolling */
        max-height: 400px;
        /* Set max height as needed */
      }

      @media (max-width: 576px) {

        /* Adjust breakpoint as needed */
        .table-responsive table {
          display: block;
          /* Change table layout to block */
          width: 100%;
          /* Ensure full width */
        }

        .table-responsive tr {
          display: flex;
          /* Change table rows to flex container */
          flex-direction: column-reverse;
          /* Display rows as columns */
        }

        .table-responsive td,
        .table-responsive th {
          display: block;
          /* Change table cells to block */
          text-align: left;
          /* Align cell content */
          padding: 8px;
          /* Add padding */
          border: none;
          /* Remove borders */
        }

        .table-responsive th {
          font-weight: bold;
          /* Make header cells bold */
        }
      }
    </style>




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
                  <a href="PrivCookies.html">Política de Privacidade e Cookies</a>
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
                <a href="contactos.html" class="btn btn-footer px-4 py-2">Contacte-nos</a>
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
                    <a class="icone-redes" href="https://www.facebook.com/CCRCCR.Colegio" target="_blank"><i
                        class="fa-brands fa-square-facebook fa-2xl"></i></a>
                  </div>

                  <div class="col-4 col-lg-12 mb-lg-4">
                    <a class="icone-redes" href="https://www.instagram.com/ccrccr.colegio/" target="_blank"><i
                        class="fab fa-square-instagram fa-2xl"></i></a>
                  </div>

                  <div class="col-4 col-lg-12">
                    <a class="icone-redes" href="https://www.youtube.com/@CCRCCR.Colegio" target="_blank"><i
                        class="fab fa-youtube fa-2xl"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-3 col-lg-3">
            <div class="row">
              <div class="col-12">
                <div class="reclamacoesContainer text-center">
                  <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">
                    <img class="img-fluid" src="imagens/Geral/livro_reclamacoes.png" alt="" /></a>
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
                <img class="img-fluid" src="imagens/Geral/logo2.png" alt="" id="imgFoot" />
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