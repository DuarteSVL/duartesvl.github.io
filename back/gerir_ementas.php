<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir refeições</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="gerir_ementas.css">
</head>

<body>
    <div class="container my-5">
        <h2><a href="./gerir_ementas.php"> Lista de refeições</a></h2>
        <h2><a href="./main.php"> Main</a></h2>
        <a class="btn btn-primary" href="./refeicao_create.php">Nova Refeição</a>

        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" class="form-control" placeholder="Procurar palavras.">
                <button type="submit" class="btn btn-primary">Procurar</button>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Acção</th>
                </tr>
            </thead>
            <tbody>
                <?php
               include "db_conn.php";

                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $sql = "SELECT * FROM refeicao WHERE CONCAT(nome, tipo, descricao) LIKE '%$filtervalues%' ";
                } else {
                    $sql = "SELECT * FROM refeicao";
                }

                $result = $ligacaoBD->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($ligacaoBD));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_refeicao'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./refeicao_edit.php?id=" . $row['id_refeicao'] . "'>Editar</a>";
                        echo "<a class='btn btn-primary btn-sm' href='./refeicao_delete.php?id=" . $row['id_refeicao'] . "'>Apagar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Sem resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>