<!DOCTYPE html>
<html>

<head>
    <title>Inserir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="ementas_back.css">

</head>

<body>
    <section class="container d-none d-lg-block" id="office-main">
        <div class="row">


            <?php

            include "db_conn.php";



            // Taking 3 values from the form data(input)
            $nome = $_REQUEST['nomeN'];
            $tipo = $_REQUEST['tipoN'];
            $descricao = $_REQUEST['descricaoN'];


            // table name is refeicao
            $sql = "INSERT INTO refeicao (nome, tipo, descricao) 
            VALUES ('$nome', '$tipo', '$descricao')";

            ?>

            <section class="container d-none d-lg-block">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">


                        <?php

                        if (mysqli_query($ligacaoBD, $sql)) {
                            echo "<h3>Valores inseridos com sucesso na base de dados.</h3>";

                            // echo nl2br("\n$nome\n $tipo\n " . "$descricao");
                        } else {
                            echo "ERROR" . mysqli_error($ligacaoBD);
                        }

                        // Close connection
                        mysqli_close($ligacaoBD);
                        ?>
                    </div>
                </div>
            </section>

            <section class="container d-none d-lg-block">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <button class="button-voltar">
                            <a href="./ementa_back.php">
                                Voltar atrás
                            </a>
                        </button>

                    </div>
                </div>
            </section>



        </div>
    </section>
</body>

</html>