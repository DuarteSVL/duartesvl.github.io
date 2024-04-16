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

 <!-- Próprios -->
 <link href="css/noticias.css" rel="stylesheet">
   <link href="css/headerFooter.css" rel="stylesheet">
   <script src="js/main.js"></script>

 <!-- Navbar Aqui Dentro -->
 <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
  <div class="container-fluid">
    <!-- Logotipo e Texto -->
    <div class="col-1" id="navLogo">
      <a href="index.html"><img class="col-lg-12 col-md-8 col-sm-6" src="../imagens/Geral/logo2.png" id="logo"></a>
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
            <img src="../imagens/Geral/educabiz 2.png" alt="" id="educabiz">
          </a>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- Fim da Navbar -->

  <div class="container-xxl all-content bg-white p-0">
        


    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header-noticias position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Noticias e Eventos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Ínicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Noticias e Eventos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Título Inicial -->
            <div class="row align-items-center">
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <h1 class="mb-4">Noticias e Eventos</h1>
                </div>
            </div>
    <!-- Título Inicial -->
    <div class="content-wrapper">
        <div class="container" style="text-align: justify;">
            <br><br>

    <!--Row e cols para espaçar filtros e noticias-->
    <div class="row" style="width:100%">

    <div class="col-2">

  <!--Filtros-->
  <div class="navbar-form navbar-left sticky-top d-none d-md-block" id="filtros">
    <h6>Filtros</h6>
    <hr>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Direção
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Eventos
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Área Desportiva
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Voluntariado
      </label>
    </div>

    <hr>

    <div>
      <!-- searchbar -->
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
</div>
  

   
  <div class="col">
   <!-- Noticias -->

   <!-- Aviso, as imagens têm que ter as mesmas dimensões para não desalinhar as cartas, 800px height e 1000px width -->
   <!-- Aviso, as imagens têm que ter as mesmas dimensões para não desalinhar as cartas, 800px height e 1000px width -->

   <!-- Card Deck 1 -->
   <div class="card-deck d-flex justify-content-between">

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/POP-DANCE.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">A POP Dance chegou ao CCRCCR!</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Nas aulas de Pop Dance, podes contar dançar aos ritmos contagiantes da Pop, Hip Hop, RNB e Dancehall, entre outros.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">11 Outubro 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/pascoa.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Horário da Páscoa: Escola Primária</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Conheça AQUI o planeamento de atividades da Escola Primária, para esta semana de pausa letiva. <br> Votos de Boa Páscoa, com muita saúde! </p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">28 Março 2021</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/judo.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Vem praticar Judo no CCR CCR!</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">O Judo é mais uma modalidade que podes praticar connosco e que contribui para o teu desenvolvimento físico, psíquico e social de forma integrada.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">20 Outubro 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

  </div>
  <br> <!-- Break entre Card Decks -->

  <!-- Card Deck 2 -->
  <div class="card-deck d-flex justify-content-between">

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/inicioano.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Início do Ano Letivo 2023/2024 – 12/09/2023</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Terminado está mais um ano letivo, estamos já em preparação do novo que irá começar.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">10 Julho 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/crescer.png" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Dia Internacional do Brincar – Teatro na Escola</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Dia 28/05 comemora-se o Dia Internacional do Brincar, e é por isso que, no próximo dia 27/05, Sexta-Feira, o Teatro vem à escola, com a peça “ao CRESCER quero SER”.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">25 Maio 2022</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="../imagens/noticias/certificado.png" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">CCR CCR recebe certificado do Programa de Educação Olímpica 2022/2023</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Nas aulas de Pop Dance, podes contar dançar aos ritmos contagiantes da Pop, Hip Hop, RNB e Dancehall, entre outros.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">01 Agosto 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.html" class="card-link">Ver Mais</a>
      </div>
    </div>

  </div>


    

<!-- Fim Noticias -->
</div>

<!-- Fim row -->
</div>

<br><br>

<!-- Paginação -->
<nav aria-label="...">
  <ul class="pagination pagination-sm justify-content-center" id="paginacao">
    <li class="page-item"><a class="page-link" href="noticias.html" tabindex="-1">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
  </ul>
</nav>


        </div>
        </div>
    </div><!-- Não apagar div do container -->
</div><!-- Não apagar div do container -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
</div>
</div><!-- Não apagar é do loading -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>














   

    <style>
        .card {
            margin-bottom: 10px;
            /* Space between cards */
        }
    </style>
</head>

<body>

    

    <!--Row e cols para espaçar filtros e noticias-->
    <div class="row" style="width:100%">

        <div class="col-2">

            
            <!-- Noticias -->

            <!-- Aviso, as imagens têm que ter as mesmas dimensões para não desalinhar o texto das cartas -->

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
                        echo '<img class="card-img-top" src="' . '../img_noticia/' . $row['imagem'] . '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">';
                        // Título
                        echo $row['titulo'];
                        echo '</h5>';
                        echo '<p class="card-text">';
                        // Texto
                        if (strlen($row['texto']) > 100) {
                            echo substr($row['texto'], 0, 100) . '...';
                        } else {
                            echo $row['texto'];
                        }
                        echo '</p>';
                        echo '</div>';
                        echo '<div class="card-footer">';
                        // Data
                        echo '<small class="text-muted">';
                        echo $row['data'];
                        echo '</small>';
                        // Link para página da noticia com ID como parâmetro
                        echo '<a href="./noticia_artigo.php?id=' . $row['id_noticia'] . '" class="card-link">Ver Mais</a>';
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

    <br><br>

    <!-- Paginação -->
    <nav aria-label="...">
        <ul class="pagination pagination-sm justify-content-center" id="paginacao">
            <li class="page-item"><a class="page-link" href="#" tabindex="-1">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
        </ul>
    </nav>


</body>

</html>