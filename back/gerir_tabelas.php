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
                        echo "<select>";
                        // Query to fetch 'nome' values from the 'refeicoes' table where 'tipo' is equal to the current 'tipo' value
                        $query_refeicoes = "SELECT nome FROM refeicoes WHERE tipo = '$tipo'";
                        $result_refeicoes = mysqli_query($ligacaoBD, $query_refeicoes);
                        // Loop through fetched 'nome' values and populate select options
                        while ($row_refeicao = mysqli_fetch_assoc($result_refeicoes)) {
                            echo '<option value="' . $row_refeicao['nome'] . '">' . $row_refeicao['nome'] . '</option>';
                        }
                        echo "</select>";
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