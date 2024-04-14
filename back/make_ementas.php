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

        <?php
        // Assuming you have established a database connection and fetched data from the 'celula' table
// $result contains the fetched data
        
        // Define an array to store the table data
        $tableData = array(
            'Sopa' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => ''),
            'Prato' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => ''),
            'Dieta' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => ''),
            'Vegetariano' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => ''),
            'Sobremesa' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => ''),
            'Lanche' => array('segunda' => '', 'terca' => '', 'quarta' => '', 'quinta' => '', 'sexta' => '')
        );

        // Loop through the fetched data and populate the $tableData array
        while ($row = mysqli_fetch_assoc($result)) {
            $tipo = $row['tipo'];
            $dia = $row['dia'];
            $tableData[$tipo][$dia] = $row['id_celula']; // Assuming you want to fill the cell with id_celula
        }

        // Output the table with populated data
        echo '<table class="table">';
        echo '<tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
      </tr>';

        foreach ($tableData as $tipo => $dias) {
            echo '<tr>';
            echo '<th>' . $tipo . '</th>';
            foreach ($dias as $dia => $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
        ?>



</body>

</html>