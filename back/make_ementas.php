<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ementas</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="gerir_tabelas.css">
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
  <div class="container my-5">

    <h2><a href="./make_ementas.php"> Ementas </a></h2>


    <?php

    include "db_conn.php";

    ?>



    <table class="table" ;">
      <tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
      </tr>
      <tr>
        <th>Sopa</th>
        <?php


        // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
      <tr>
        <th>Prato</th>
        <?php


        // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
      <tr>
        <th>Dieta</th>
        <?php


        // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
      <tr>
        <th>Vegetariano</th>
        <?php

        // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
      <tr>
        <th>Sobremesa</th>
        <?php

        // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
      <tr>
        <th>Lanche</th>
        <?php

        // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
      </tr>
    </table>

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