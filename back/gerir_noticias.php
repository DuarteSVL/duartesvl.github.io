<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir notícias</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="gerir_noticias.css">
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-end mb-3">
            <h2 class="btn btn-primary"><a href="./main.php" class="text-white" style="text-decoration: none">Main</a>
            </h2>
        </div>

        <div class="header-container">
            <h2><a href="./gerir_noticias.php">Lista de notícias</a></h2>
        </div>
        <a class="btn btn-primary" href="./noticia_create.php">Nova Notícia</a>


        <form action="upload.php" method="post" enctype="multipart/form-data">
            Seleccione a imagem para adicionar:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Fazer upload" name="submit">
        </form>


        <form action="" method="GET">
            <div class="input-group">
                <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                    echo $_GET['search'];
                } ?>" class="form-control" placeholder="Procurar palavras.">
                <button type="submit" class="btn btn-primary">Procurar</button>
            </div>
        </form>





        <!-- Display success message if set -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success']; ?>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <!-- Display error message if set -->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error']; ?>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>





        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Imagem</th>
                    <th>Data</th>
                    <th>Activo</th>
                    <th>Prioridade</th>
                    <th>Acção</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include "db_conn.php";


                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $sql = "SELECT * FROM noticia WHERE CONCAT(titulo, texto, imagem, activo) LIKE '%$filtervalues%' ORDER BY activo DESC, data desc";
                } else {
                    $sql = "SELECT * FROM noticia ORDER BY activo DESC, ordem desc, data desc";
                }

                $result = $ligacaoBD->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($ligacaoBD));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_noticia'] . "</td>";
                        echo "<td>" . $row['titulo'] . "</td>";
                        echo "<td>" . $row['texto'] . "</td>";
                        echo "<td>" . $row['imagem'] . "</td>";
                        echo "<td>" . $row['data'] . "</td>";

                        if ($row['activo'] == 0) {
                            echo "<td> Desactivado </td>";
                        } else {
                            echo "<td> Activo </td>";
                        }
                        echo "<td>" . $row['ordem'] . "</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./noticia_edit.php?id=" . $row['id_noticia'] . "'>Editar</a>";
                        echo "<a class='btn btn-primary btn-sm' href='./noticia_delete.php?id=" . $row['id_noticia'] . "'>Apagar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Sem resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>


    </div>


</body>

</html>