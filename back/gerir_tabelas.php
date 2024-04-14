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


        <table class="table">
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
                <td>
                    <?php
                    // Establish a database connection
                    include "db_conn.php";

                    // Query to fetch distinct 'tipo' values from the 'celula' table
                    $query_tipos = "SELECT DISTINCT tipo FROM celula WHERE valencia = 'Basico'";
                    $result_tipos = mysqli_query($ligacaoBD, $query_tipos);

                    // Loop through distinct 'tipo' values
                    while ($row_tipo = mysqli_fetch_assoc($result_tipos)) {
                        $tipo = $row_tipo['tipo'];
                        // Query to fetch the current 'id_refeicao' and 'nome' from 'celula' table
                        $query_celula_refeicao = "SELECT c.id_refeicao, r.nome FROM celula c INNER JOIN refeicoes r ON c.id_refeicao = r.id_refeicao WHERE c.tipo = '$tipo' AND c.valencia = 'Basico'";
                        $result_celula_refeicao = mysqli_query($ligacaoBD, $query_celula_refeicao);
                        // Check if the query was successful
                        if ($result_celula_refeicao) {
                            // Fetch the 'id_refeicao' and 'nome' from the result
                            $row_celula_refeicao = mysqli_fetch_assoc($result_celula_refeicao);
                            $id_refeicao = $row_celula_refeicao['id_refeicao'];
                            $nome_refeicao = $row_celula_refeicao['nome'];
                            // Display the current 'nome' of the 'id_refeicao'
                            echo '<p>Current Refeicao for ' . $tipo . ': ' . $nome_refeicao . '</p>';
                            // Reset the result pointer to the beginning
                            mysqli_data_seek($result_celula_refeicao, 0);
                            // Start building the select options
                            echo "<select>";
                            // Loop through fetched 'nome' values and populate select options
                            while ($row_refeicao = mysqli_fetch_assoc($result_celula_refeicao)) {
                                echo '<option value="' . $row_refeicao['id_refeicao'] . '">' . $row_refeicao['nome'] . '</option>';
                            }
                            echo "</select>";
                        } else {
                            echo '<p>No Refeicao found for ' . $tipo . '</p>';
                        }
                    }
                    ?>


                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Prato</th>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th>Dieta</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th>Vegetariano</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th>Sobremesa</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th>Lanche</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        </table>




        <a class="btn btn-primary" href="./refeicao_create.php">Actualizar Tabelas</a>

        <?php

        // $sql = "UPDATE noticia "
        //     . "SET titulo = '$titulo', texto = '$texto'
        //     "
        //     . "WHERE id_noticia = $id";
        


        ?>


    </div>


</body>

</html>