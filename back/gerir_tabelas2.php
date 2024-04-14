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


                    // Query to fetch the 'nome' value from the 'refeicao' table for the 'id_refeicao' of the first row where 'valencia' is equal to 'Basico' and 'id_celula' equals 1
                    $query_default = "SELECT r.nome FROM refeicao r INNER JOIN celula c ON c.id_refeicao = r.id_refeicao WHERE c.id_celula = 1 AND c.valencia = 'Basico'";
                    $result_default = mysqli_query($ligacaoBD, $query_default);
                    $row_default = mysqli_fetch_assoc($result_default);

                    // Query to fetch 'nome' values from the 'refeicao' table where 'tipo' is equal to 'Sopa'
                    $query_refeicoes = "SELECT r.nome FROM refeicao r INNER JOIN celula c ON c.id_refeicao = r.id_refeicao WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'";
                    $result_refeicoes = mysqli_query($ligacaoBD, $query_refeicoes);

                    // Start building the select options
                    echo "<select>";
                    // Placeholder option with the default value
                    echo '<option value="' . $row_default['nome'] . '" selected>' . $row_default['nome'] . '</option>';
                    // Loop through fetched 'nome' values and populate select options
                    while ($row_refeicao = mysqli_fetch_assoc($result_refeicoes)) {
                        echo '<option value="' . $row_refeicao['nome'] . '">' . $row_refeicao['nome'] . '</option>';
                    }
                    echo "</select>";
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