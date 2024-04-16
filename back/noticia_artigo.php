
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

  <!-- Próprios -->
  <link rel="stylesheet" href="noticias.css">
  <script src="app.js"></script>


</head>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Notícia</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <style>
        /* Center the text */
        p {
            text-align: justify;
        }

        /* Style the container */
        .container {
            max-width: 800px; /* Adjust as needed */
        }
    </style>
</head>

<body>
    <!-- Breadcrumbs para a página -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Início</a></li>
            <li class="breadcrumb-item"><a href="/make_noticias.php">Notícias e Eventos</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $titulo; ?>
            </li>
        </ol>
    </nav>

    <!-- Container for content -->
    <div class="container my-5">
        <div class="bg-light p-4 rounded">
            <!-- Título -->
            <div class="d-flex justify-content-center">
                <h3>
                    <?php echo $titulo; ?>
                </h3>
            </div>

            <!-- Data -->
            <h5 class="text-center">
                <?php echo $data; ?>
            </h5>

            <div class="row">
                <!-- Imagem -->
                <div class="border col-md-4 float-md-end mb-3 mx-auto p-3" id="imgNoticia">
                    <img src="../img_noticia/<?php echo $imagem; ?>" class="img-fluid" alt="">
                </div>

                <!-- Texto -->
                <div class="col-md-8"> <!-- Adjust the width as needed -->
                    <p>
                        <?php echo $texto; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>


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
