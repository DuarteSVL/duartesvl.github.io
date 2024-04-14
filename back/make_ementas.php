<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ementas</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="gerir_tabelas.css">
</head>

<body>
    <div class="container my-5">

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
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Prato</th>
                <th>Sopa</th>
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Dieta</th>
                <th>Sopa</th>
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Vegetariano</th>
                <th>Sopa</th>
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Sobremesa</th>
                <th>Sopa</th>
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Lanche</th>
                <th>Sopa</th>
                <?php
                // Assuming you have established a database connection and fetched the data
                // $result contains the fetched data
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
        </table>


</body>

</html>