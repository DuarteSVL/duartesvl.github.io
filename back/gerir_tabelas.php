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

                    // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                    $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

                    $result = mysqli_query($ligacaoBD, $query);

                    // Start select option menu
                    echo '<select>';
                    // Loop through the fetched data and populate select options
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['nome'] . '">' . $row['nome'] . '</option>';
                    }
                    // End select option menu
                    echo '</select>';
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
                    <select name="teste">
                        <?php
                        include "db_conn.php";


                        // Query to fetch data from the database
                        $sql = "SELECT * FROM refeicao WHERE tipo = 'prato' ORDER BY nome ASC";
                        $result = $ligacaoBD->query($sql);

                        // Query to fetch the default value from the database
                        $sql2 = "SELECT conteudo FROM celula WHERE id_celula = 1";
                        $result2 = $ligacaoBD->query($sql2);
                        $default_content = "";
                        if ($row = mysqli_fetch_assoc($result2)) {
                            $default_content = $row['conteudo'];
                        }

                        // Checking if form is submitted and getting selected value
                        $select = isset($_POST['NEW']) ? $_POST['NEW'] : '';

                        // Loop through the result set and populate the dropdown options
                        while ($row_list = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $row_list['nome']; ?>" <?php if ($row_list['nome'] == $select) {
                                   echo "selected";
                               } ?>>
            <?php echo $row_list['nome']; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
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