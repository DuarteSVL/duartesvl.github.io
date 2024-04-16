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
</head>

<body>

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
                        echo '<img class="card-img-top" src="../img_noticia/' . $row['imagem'] . '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        // Título
                        echo '<h5 class="card-title">' . $row['titulo'] . '</h5>';
                        // Texto
                        echo '<p class="card-text">';
                        if (strlen($row['texto']) > 100) {
                            echo substr($row['texto'], 0, 100) . '...';
                        } else {
                            echo $row['texto'];
                        }
                        echo '</p>';
                        echo '</div>';
                        echo '<div class="card-footer">';
                        // Data
                        echo '<small class="text-muted">' . $row['data'] . '</small>';
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



</body>

</html>