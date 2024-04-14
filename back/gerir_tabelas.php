<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir Ementas</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="gerir_tabelas.css">
</head>

<body>
    <div class="container my-5">
        <h2><a href="./gerir_tabelas.php"> Lista de Ementas</a></h2>
        <h2><a href="./make_ementas.php"> Ementas</a></h2>



        <?php

        include "db_conn.php";

        ?>

<table class="table table-striped">
            <thead>
                <tr>
                    <th>Valência</th>
                    <th>Dia da semana</th>
                    <th>Tipo</th>
                    <th>Refeição</th>
                    <th>Nova Refeição</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include "db_conn.php";

                $sql = "SELECT * FROM celula ORDER BY id_celula asc";
                

                $result = $ligacaoBD->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($ligacaoBD));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['valencia'] . "</td>";
                        echo "<td>" . $row['dia'] . "</td>";
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td>" . $row['refeicao'] . "</td>";
                        echo "<td>"       . "</td>";

        
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./tabela_edit.php?id=" . $row['id_celula'] . "'>Editar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Sem resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>



</body>

</html>