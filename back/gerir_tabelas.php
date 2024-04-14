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
                $sql = "SELECT c.valencia, c.dia, c.tipo, r.nome AS refeicao_nome, c.id_celula, c.id_refeicao
                FROM celula c
                INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                ORDER BY c.id_celula ASC";

                $result = $ligacaoBD->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($ligacaoBD));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['valencia'] . "</td>";
                        echo "<td>" . ucfirst($row['dia']) . "</td>"; // Capitalize the first character of $row['dia']
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td>" . $row['refeicao_nome'] . "</td>"; // Display the nome value of refeicao
                
                        // Query to fetch all 'nome' values from the 'refeicao' table where 'tipo' matches the current row's 'tipo'
                        $query_refeicoes_tipo = "SELECT nome, id_refeicao FROM refeicao WHERE tipo = '" . $row['tipo'] . "'";
                        $result_refeicoes_tipo = mysqli_query($ligacaoBD, $query_refeicoes_tipo);

                        echo "<td>";
                        // Display form with select dropdown for updating id_refeicao
                        echo "<form action='update_id_refeicao.php' method='post'>";
                        echo "<input type='hidden' name='id_celula' value='" . $row['id_celula'] . "'>";
                        echo "<select name='nova_refeicao'>";
                        while ($row_refeicao_tipo = mysqli_fetch_assoc($result_refeicoes_tipo)) {
                            $selected = ($row['id_refeicao'] == $row_refeicao_tipo['id_refeicao']) ? "selected" : "";
                            echo "<option value='" . $row_refeicao_tipo['id_refeicao'] . "' $selected>" . $row_refeicao_tipo['nome'] . "</option>";
                        }
                        echo "</select>";
                        echo "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-primary btn-sm', type='submit'>Alterar</button>";
                        echo "</form>";
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